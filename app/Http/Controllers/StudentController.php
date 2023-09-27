<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function siswaData()
    {
        // Gantilah 'nama_tabel_anda' dengan nama tabel yang benar di database Anda
        $datas = Student::where('user_id', Auth::user()->id)->get();

        return view('siswa.siswaData', ['datas' => $datas]);
    }
}
