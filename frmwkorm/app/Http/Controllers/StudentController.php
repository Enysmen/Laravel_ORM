<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function fetchStudents()
    {
        $students = Student::whereBetween('id',[33,44])->get();
        return $students;
    }
}
