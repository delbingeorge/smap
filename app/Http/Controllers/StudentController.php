<?php

namespace App\Http\Controllers;

use App\Models\Sem_3_attendance;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\FeedbackForm;
use App\Models\Sem_1_attendance;
use App\Models\Sem_2_attendance;
use App\Models\Sem_1_mse;
use App\Models\Sem_2_mse;
use App\Models\Sem_3_mse;
use App\Models\Sem_4_mse;

class StudentController extends Controller
{

    public function edit_profile(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        $request->validate([
            'about' => 'required',
            'skills' => 'required',
            'projects' => 'required',
        ]);

        try {
            $student = Student::where('student_id', session("user_id"))->first();
            $student->about = $request->about;
            $student->skills = $request->skills;
            $student->projects = $request->projects;
            $student->save();

            return redirect()->route('student-profile')->with('success', 'Profile Updated');
        } catch (QueryException $exception) {
            return redirect()->route('student.dashboard')->with('message', 'An error occurred while updating profile.');
        }

    }

    public function feedback_form()
    {
        if (!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $sem = Session::get('current_semester');
        $subjects = Subject::where('semester_number', $sem)
            ->orderBy('subject_code')
            ->get();

        $formNumber = FeedbackForm::where('student_id', session('user_id'))
            ->where('semester', session('current_semester'))
            ->select('form_number')
            ->get();

        if ($formNumber->isNotEmpty()) {
            $maxFormNumber = $formNumber->max('form_number');
            if ($maxFormNumber == 3) {
                return redirect()->route('student_dashboard')->with('success', 'No performance feedback form pending');
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

        if ($subjects->isEmpty()) {
            return redirect()->route('student_dashboard');
        }
        // Pass student name to the view
        return redirect()->route('student-feedback-form')->with([
            'studentName' => $studentName,
            'semester' => $sem,
            'subjects' => $subjects,
        ]);
    }

    public function submit_feedback_Form(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        // Validate the form data
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required',
            'field5' => 'required',
            'field6' => 'required',
            'field7' => 'required',
            'field8' => 'required',
            'field9' => 'required',
            'field10' => 'required',
            'field11' => 'required',
            'field12' => 'required',
            'field13' => 'required',
        ]);

        // Store the form data in the database
        $feedbackForm = new FeedbackForm();
        $feedbackForm->form_number = session('pending_feedback_number');
        $feedbackForm->student_id = session('user_id');
        $feedbackForm->semester = session('current_semester');
        $feedbackForm->field1 = $request->input('field1');
        $feedbackForm->field2 = $request->input('field2');
        $feedbackForm->field3 = $request->input('field3');
        $feedbackForm->field4 = $request->input('field4');
        $feedbackForm->field5 = $request->input('field5');
        $feedbackForm->field6 = $request->input('field6');
        $feedbackForm->field7 = $request->input('field7');
        $feedbackForm->field8 = $request->input('field8');
        $feedbackForm->field9 = $request->input('field9');
        $feedbackForm->field10 = $request->input('field10');
        $feedbackForm->field11 = $request->input('field11');
        $feedbackForm->field12 = $request->input('field12');
        $feedbackForm->field13 = $request->input('field13');
        $feedbackForm->save();

        $student = Student::where('student_id', session("user_id"))->first();
        $student->feedback_filled = "true";
        session(['feedback_filled' => $student->feedback_filled]);
        $student->save();

        $sem = Session::get('current_semester');
        $subjects = Subject::where('semester_number', $sem)->get();
        if ($sem == 1) {
            $sem_1_attendance = new Sem_1_attendance();
            $sem_1_attendance->form_number = session('pending_feedback_number');
            $sem_1_attendance->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_1_attendance->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
            }
            $sem_1_attendance->save();
        }
        if ($sem == 2) {
            $sem_2_attendance = new Sem_2_attendance();
            $sem_2_attendance->form_number = session('pending_feedback_number');
            $sem_2_attendance->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_2_attendance->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
            }
            $sem_2_attendance->save();
        }
        if ($sem == 3) {
            $sem_3_attendance = new Sem_3_attendance();
            $sem_3_attendance->form_number = session('pending_feedback_number');
            $sem_3_attendance->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_3_attendance->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
            }
            $sem_3_attendance->save();
        }
        // if ($sem == 4) {
        //     $sem_4_attendance = new Sem_4_attendance();
        //     $sem_4_attendance->form_number = session('pending_feedback_number');
        //     $sem_4_attendance->student_id = session('user_id');
        //     foreach ($subjects as $subject) {
        //         $subjectCode = $subject->subject_code;
        //         $sem_4_attendance->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
        //     }
        //     $sem_4_attendance->save();
        // }
        // Redirect back with success message or to another page
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

    public function mse_form()
    {
        if (!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $sem = Session::get('current_semester');
        // $pending_feedback_number = Session::get('pending_feedback_number');
        $subjects = Subject::where('semester_number', $sem)
            ->orderBy('subject_code')
            ->get();
        if ($sem == 1) {
            $mseNumber = Sem_1_mse::where('student_id', session('user_id'))
                ->select('mse_number')
                ->get();
        }
        if ($sem == 2) {
            $mseNumber = Sem_2_mse::where('student_id', session('user_id'))
                ->select('mse_number')
                ->get();
        }
        if ($sem == 3) {
            $mseNumber = Sem_3_mse::where('student_id', session('user_id'))
                ->select('mse_number')
                ->get();
        }
        if ($sem == 4) {
            $mseNumber = Sem_4_mse::where('student_id', session('user_id'))
                ->select('mse_number')
                ->get();
        }
        if ($mseNumber->isNotEmpty()) {
            $maxMseNumber = $mseNumber->max('mse_number');
            if ($maxMseNumber == 2) {
                return redirect()->route('student_dashboard')->with('success', 'No MSE form pending');
            }
            if ($maxMseNumber == 1) {
                session(['pending_mse_number' => 2]);
            }
        } else {
            session(['pending_mse_number' => 1]);
        }

        if ($subjects->isEmpty()) {
            return redirect()->route('student_dashboard');
        }
        // Pass student name to the view
        return redirect()->route('student-first-mse-form')->with([
            'studentName' => $studentName,
            'semester' => $sem,
            'subjects' => $subjects,
        ]);
    }

    public function submit_mse_marks(Request $request)
    {
        if (!Session::has('user_id') || Session::get('role') != "student")
            return redirect('/');

        $sem = Session::get('current_semester');
        $subjects = Subject::where('semester_number', $sem)->get();
        if ($sem == 1) {
            $sem_1_mse = new Sem_1_mse();
            $sem_1_mse->mse_number = session('pending_mse_number');
            $sem_1_mse->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_1_mse->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
            }
            $sem_1_mse->save();
        }
        if ($sem == 2) {
            $sem_2_mse = new Sem_2_mse();
            $sem_2_mse->mse_number = session('pending_mse_number');
            $sem_2_mse->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_2_mse->$subjectCode = $request->input($subjectCode) != null ? $request->input($subjectCode) : "null";
            }
            $sem_2_mse->save();
        }
        if ($sem == 3) {
            $sem_3_mse = new sem_3_mse();
            $sem_3_mse->mse_number = session('pending_mse_number');
            $sem_3_mse->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_3_mse->$subjectCode = $request->input($subjectCode)!=null?$request->input($subjectCode):"null";
            }
            $sem_3_mse->save();
        }
        // if ($sem == 4) {
        //     $sem_4_mse = new sem_4_mse();
        //     $sem_4_mse->mse_number = session('pending_mse_number');
        //     $sem_4_mse->student_id = session('user_id');
        //     foreach ($subjects as $subject) {
        //         $subjectCode = $subject->subject_code;
        //         $sem_4_mse->$subjectCode = $request->input($subjectCode)!=null?$request->input($subjectCode):"null";
        //     }
        //     $sem_3_mse->save();
        // }
        // Redirect back with success message or to another page

        $student = Student::where('student_id', session("user_id"))->first();
        $student->mse_filled = "true";
        session(['mse_filled' => $student->mse_filled]);
        $student->save();

        return redirect()->back()->with('success', 'MSE marks submitted successfully!');
    }

}
