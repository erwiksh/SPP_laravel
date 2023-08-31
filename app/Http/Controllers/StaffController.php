<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function data(){
        $data = staff::all();
        return view('guru.dataSiswa',compact('data'));
    }

    public function add(){
        return view('guru.manageData.add');
    }
}
