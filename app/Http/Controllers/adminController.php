<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        echo "hallo, selamat datang";
        echo "<hi>" . Auth::user()->name. "</hi>";
        echo "<a href='/logout'>Logout</a>";
    }

    public function student(){
        echo "hallo, selamat datang";
        echo "<hi>" . Auth::user()->name. "</hi>";
        echo "<a href='/logout'>Logout</a>";
    }

    public function staff(){
        echo "hallo, selamat datang admin";
        echo "<a href='/logout'>Logout</a>";
    }

}
