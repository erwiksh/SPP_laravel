<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $datas = Student::all();
        return view('siswa.siswaData',compact('datas'));
    }
}
