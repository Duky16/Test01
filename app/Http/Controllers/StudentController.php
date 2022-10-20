<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students['students'] = DB::select('select * from student');
        return view('layout.student_manage', $students);
    }

    public function get_student_by_id()
    {
        $id = $_POST['StuID'];
        $students['students'] = DB::select('select * from student where $id');
        return view('layout.student_edit', $students);
    }

    public function edit(){

    }
}
