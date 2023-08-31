<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('barang');
});

Route::get('/login', function () {
    return view('siswa.login',
    [
        "title" => "login"
    ]
);
});


Route::get('/siswa', function () {
    return view('siswa.siswa', [
        "title" => "Profile"
    ]);
});

Route::get('/bayar', function () {
    return view('siswa.bayar',[
        "title" => "pembayaran"
    ]);
});

Route::get('/about', function () {
    return view('siswa.about', 
    [
        "title" => "School Tuition Payment",
        "name" => "Erwiyana",
        "kelas" => "xi pplg"
    ]
);
});

Route::get('/post', function () {
    $blog_post = [
       [ 
        "judul" => "Judul Pertama",
        "slug" => "judul-pertama",
        "author" => "Erwiyana",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eligendi hic perferendis repellat expedita voluptate ducimus officiis! Deserunt nam, velit mollitia enim, facilis numquam corrupti ipsam nemo praesentium et est sed accusamus corporis ad fugiat distinctio totam accusantium magni voluptatibus aliquid, voluptates quia? Debitis necessitatibus accusantium quae, aperiam eveniet enim!"
        ],
        
        [
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Derci",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae modi eveniet veritatis voluptas, sed recusandae possimus officiis, quaerat itaque rem tempora voluptatibus dicta debitis fugit. Eligendi fugit quos facilis eveniet cupiditate maiores alias nobis atque molestiae! Tempora recusandae mollitia nostrum! Nobis, consequatur velit. Est asperiores natus animi accusantium! Laboriosam, molestiae!"

        ]

    ];
    return view('posts',[
        "posts" => $blog_post
    ]);
});

Route::get('/student',[StudentController::class, 'index'])->name('student');
Route::get('/staff',[StaffController::class, 'data'])->name('staff');
Route::get('/add',[StaffController::class, 'add'])->name('add');
