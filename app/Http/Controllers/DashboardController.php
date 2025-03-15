<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function admin()
    {
        $teachers = Teacher::all();
        return view('admin.dashboard', compact('teachers'));
    }

    public function student()
    {
        return view('student.dashboard');
    }

    public function teacher()
    {
        $students = DB::select("SELECT * FROM students WHERE student_id IN (SELECT mentee_id FROM mentorship WHERE mentor_id = ?)", [session("user_id")]);
        return view('teacher.dashboard', compact('students'));
    }
}
