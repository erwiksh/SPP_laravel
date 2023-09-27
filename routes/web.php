<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/pp', function () {
    return view('barang');
});

// Route::get('/hi', function () {
//     return view('siswa.login',
//     [
//         "title" => "login"
//     ]
// );
// });


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
Route::post('/insertData', [StaffController::class, 'insertData'])->name('insertData');

Route::get('/update/{id}', [StaffController::class, 'update'])->name('update');
Route::post('/updateData/{id}', [StaffController::class, 'updateData'])->name('updateData');

Route::get('/delete/{id}', [StaffController::class, 'delete'])->name('delete');

// for guest

Route::middleware(['guest'])->group(function(){
    Route::get('/', [loginController::class, 'index'])->name('login');
    Route::post('/', [loginController::class, 'loginUser'])->name('loginUser');

    Route::get('/register', [loginController::class, 'register'])->name('register');
    Route::post('/registerUser', [loginController::class, 'registerUser'])->name('registerUser');
});

Route::get('/home',function(){
    return Redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[adminController::class, 'index']);
    Route::get('/admin/staff',[adminController::class, 'staff']);
    Route::get('/admin/student',[adminController::class, 'student']);
    Route::get('/logout',[loginController::class,'logout']);
});



