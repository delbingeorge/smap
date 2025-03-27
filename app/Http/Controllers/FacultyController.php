<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use App\Models\Student;
use App\Models\Teacher;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function addStudent(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') == "student")
            return redirect('/');

        $request->validate([
            'usn' => 'required',
            'fullname' => 'required',
            'semester' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = new User;
            $user->user_id = $request->usn;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'student';
            $user->save();

            $student = new Student;
            $student->student_id = $request->usn;
            $student->fullname = $request->fullname;
            $student->semester = $request->semester;
            $student->contact = $request->contact;
            $student->email = $request->email;
            $student->save();

            $mentorship_table = new Mentorship;
            $mentorship_table->mentor_id = session('user_id');
            $mentorship_table->mentee_id = $request->usn;
            $mentorship_table->save();
            // dd(session('user_id'), $request->usn);
            return redirect()->route('teacher.dashboard')->with('success', 'Student added successfully.');

        } catch (QueryException $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect()->route('teacher.dashboard')->with('error', 'Student USN already exists.');
            }
            dd($errorCode);
        } catch (Exception $exception) {
            return redirect()->route('teacher.dashboard')->with('error', $exception->getMessage());
        }
    }

    public function deleteStudent(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') == "student")
            return redirect('/');

        $request->validate([
            'student_id' => 'required',
        ]);

        try {
            $student = Student::where('student_id', $request->student_id)->first();
            $student->delete();

            DB::select("DELETE FROM mentorshiP WHERE mentee_id = ? AND mentor_id = ?", [$request->student_id, session(key: 'user_id')]);

            $user = User::where('user_id', $request->student_id)->first();
            $user->delete();

            return redirect()->route('teacher.dashboard')->with('success', 'Student removed successfully.');
        } catch (QueryException $exception) {
            return redirect()->route('teacher.dashboard')->with('error', 'An error occurred while deleting student.');
        }

    }

    public function deleteStudentsBySemester(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') == "student") {
            return redirect('/');
        }

        $request->validate([
            'semester' => 'required',
        ]);

        $semester = $request->input('semester');

        try {
            $studentIds = DB::table('students')
                ->where('semester', $semester)
                ->whereIn('student_id', function ($query) {
                    $query->select('mentee_id')
                        ->from('mentorship')
                        ->where('mentor_id', session('user_id'));
                })
                ->pluck('student_id');

            if ($studentIds->isEmpty()) {
                return redirect()->route('teacher.dashboard')->with('error', 'No mentees found for the selected semester.');
            }

            DB::table('mentorship')
                ->whereIn('mentee_id', $studentIds)
                ->where('mentor_id', session('user_id'))
                ->delete();

            DB::table('students')
                ->whereIn('student_id', $studentIds)
                ->delete();

            DB::table('users')
                ->whereIn('user_id', $studentIds)
                ->delete();


            return redirect()->route('teacher.dashboard')->with('success', 'Mentees of Semester ' . $semester . ' removed successfully.');
        } catch (QueryException $exception) {
            return redirect()->route('teacher.dashboard')->with('error', 'An error occurred while deleting students.');
        }
    }


    public function search(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') == "student")
            return redirect('/');

        $semester = $request->query('semester');
        $id = $request->query('id');
        $role = $request->query('role');

        if ($role == 'student') {
            if (isset($semester)) {
                if ($semester == 'all') {
                    $students = $students = DB::select("SELECT * FROM students WHERE student_id in (SELECT mentee_id from mentorship WHERE mentor_id = ?)", [session("user_id")]);
                    return redirect()->route('teacher.dashboard');
                } else {
                    $students = DB::select("SELECT * FROM students WHERE student_id in (SELECT mentee_id from mentorship WHERE mentor_id = ?) AND semester = ?", [session("user_id"), $semester]);
                    return view('teacher.dashboard', compact('students'));
                }
            } elseif (isset($id)) {
                $students = Student::where('student_id', $id)->get();
                return view('teacher.dashboard', compact('students'));
            } else {
                $students = Student::all();
                return redirect()->route('teacher.dashboard');
            }
        }
        if ($role == 'teacher') {
            if (isset($id)) {
                $teachers = Teacher::where('emp_id', $id)->get();
                return view('teacher/view-faculties', compact('teachers'));
            } else {
                return redirect()->route('view-faculties');
            }
        }
        if ($role == 'admin') {
            if (isset($id)) {
                // $teachers = Teacher::where('emp_id', $id)->get();
                $teachers = DB::select('SELECT * FROM teachers WHERE emp_id=?', [$id]);
                return view('admin.dashboard', compact('teachers'));
            } else {
                return redirect()->route('admin.dashboard');
            }
        }
    }

    public function assignMentees(Request $request)
    {
        try {
            Log::info('Assigning mentees', ['request' => $request->all()]);

            // Validate input
            $request->validate([
                'old_faculty_id' => 'required',
                'new_faculty_id' => 'required',
            ]);

            DB::select('UPDATE mentorship set mentor_id=? WHERE mentor_id=?', [$request->new_faculty_id, $request->old_faculty_id]);

            $teacher = Teacher::where('emp_id', $request->old_faculty_id)->first();
            $teacher->delete();

            $user = User::where('user_id', $request->old_faculty_id)->first();
            $user->delete();

            return response()->json(['message' => 'Mentees reassigned successfully']);
        } catch (Exception $e) {
            Log::error('Error assigning mentees', ['error' => $e->getMessage()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
