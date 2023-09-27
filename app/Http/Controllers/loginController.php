<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Hash;



class loginController extends Controller
{

    public function index(){
        return view('login');
    }   

    public function loginUser(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ], [
        'email.required' => 'Email Wajib diisi',
        'password.required' => 'Password wajib diisi',
    ]);

    if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
    ])) {
        // Pengguna telah berhasil login, sekarang kita periksa peran mereka
        if (Auth::user()->role == 'admin') {
            return view('siswa.siswaData'); // Sesuaikan dengan nama blade template yang benar
        } elseif (Auth::user()->role == 'student') {
            return view('guru.dataSiswa'); // Sesuaikan dengan nama blade template yang benar
        }
    }

    // Jika tidak berhasil login atau tidak ada peran yang cocok, lakukan penanganan kesalahan di sini
    return redirect()->route('login')->with('error', 'Login gagal. Periksa email, password, atau peran yang dipilih.');
}


    public function register(){
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:siswa,admin'], // Pastikan peran yang dipilih adalah 'siswa' atau 'admin'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Simpan peran yang dipilih dalam basis data
        ]);

        // Redirect ke halaman login atau ke halaman lain sesuai kebutuhan Anda
        return redirect('/');
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }

}
