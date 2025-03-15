<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\FeedbackForm;

class LoginController extends Controller
{
    public function student_staff_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isStudent()) {
                // Retrieve student details
                $student = Student::join('users', 'students.student_id', '=', 'users.user_id')
                    ->where('users.email', $credentials['email'])
                    ->select('students.*')
                    ->first();
                $mentor_details = Teacher::join('mentorship', 'teachers.emp_id', '=', 'mentorship.mentor_id')
                    ->where('mentorship.mentee_id', $user->user_id)
                    ->select('teachers.*')
                    ->first();

                session(['user_id' => $student->student_id, 'role' => $user->role, 'student_name' => $student->fullname, 'contact' => $student->contact, 'email' => $credentials['email'], 'current_semester' => $student->semester, 'feedback_filled' => $student->feedback_filled, 'mse_filled' => $student->mse_filled, 'mentor_name' => $mentor_details->fullname, 'designation' => $mentor_details->designation]);
                $formNumber = FeedbackForm::where('student_id', session('user_id'))
                    ->where('semester', session('current_semester'))
                    ->select('form_number')
                    ->get();
                if ($formNumber->isNotEmpty()) {
                    $maxFormNumber = $formNumber->max('form_number');
                    if ($maxFormNumber == 3) {
                        session(['pending_feedback_number' => 0]);
                        return redirect()->route('student.dashboard');
                    }
                    if ($maxFormNumber == 2) {
                        session(['pending_feedback_number' => 3]);
                    }
                    if ($maxFormNumber == 1) {
                        session(['pending_feedback_number' => 2]);
                    }
                } else {
                    session(['pending_feedback_number' => 1]);
                }
                // Redirect students to the student dashboard
                return redirect()->route('student.dashboard');
            } elseif ($user->isTeacher()) {
                // Retrieve teacher details
                $teacher = Teacher::join('users', 'teachers.emp_id', '=', 'users.user_id')
                    ->where('users.email', $credentials['email'])
                    ->select('teachers.*')
                    ->first();
                session(['user_id' => $teacher->emp_id, 'role' => $user->role, 'faculty_name' => $teacher->fullname, 'designation' => $teacher->designation, 'contact' => $teacher->contact, 'email' => $credentials['email']]);
                // Redirect teachers to the teacher dashboard
                return redirect()->route('teacher.dashboard');
            } elseif ($user->isHOD()) {
                // Retrieve teacher details
                $teacher = Teacher::join('users', 'teachers.emp_id', '=', 'users.user_id')
                    ->where('users.email', $credentials['email'])
                    ->select('teachers.*')
                    ->first();
                session(['user_id' => $teacher->emp_id, 'role' => $user->role, 'isHOD' => true, 'faculty_name' => $teacher->fullname, 'designation' => $teacher->designation, 'contact' => $teacher->contact, 'email' => $credentials['email']]);
                // Redirect teachers to the teacher dashboard
                return redirect()->route('teacher.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('/')->with('invalid_student_credential', 'Please visit the admin login page');
            }
        }

        return redirect('/')->with('invalid_student_credential', 'Invalid Credentials');
    }


    public function admin_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isAdmin()) {
                session(['user_id' => $user->id, 'role' => $user->role]);
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('admin')->with('invalid_admin_credential', 'Please visit Student Login');
            }
        }
        return redirect('admin')->with('invalid_admin_credential', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}