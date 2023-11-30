<?php
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

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
    return view('admin/katalog-buku');
});

Route::resource('/books', \App\Http\Controllers\bookController::class, ); 


Route::get('/dashboard', function () {
    return view('admin/dashboard', [
        "active" => "dashboard"
    ]);
});

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/register', function () {
    return view('admin/register');
});

Route::get('/data-anggota', function () {
    return view('admin/data-anggota', [
        'active'=> 'data-anggota'
    ]);
});

Route::get('/data-administrator', function () {
    return view('admin/data-administrator', [
        'active'=> 'data-administrator'
    ]);
});


// Route::get('/data-buku', function () {
//     return view('admin/data-buku', [
//         'active'=> 'data-buku'
//     ]);
// });

Route::get('/data-kategori', function () {
    return view('admin/data-kategori', [
        'active'=> 'data-kategori'
    ]);
});

Route::get('/tambah-anggota', function () {
    return view('admin/tambah-anggota', [
        'active'=> 'tambah-anggota'
    ]);
});

Route::get('/tambah-administrator', function () {
    return view('admin/tambah-administrator', [
        'active'=> 'tambah-administrator'
    ]);
});

// Route::get('/tambah-buku', function () {
//     return view('admin/tambah-buku', [
//         'active'=> 'tambah-buku'
//     ]);
// });

Route::get('/tambah-kategori', function () {
    return view('admin/tambah-kategori', [
        'active'=> 'tambah-kategori'
    ]);
});

Route::get('/peminjaman', function () {
    return view('admin/peminjaman', [
        'active'=> 'peminjaman'
    ]);
});

Route::get('/data-peminjaman', function () {
    return view('admin/data-peminjaman', [
        'active'=> 'data-peminjaman'
    ]);
});

Route::get('/data-pengembalian', function () {
    return view('admin/data-pengembalian', [
        'active'=> 'data-pengembalian'
    ]);
});

Route::get('/identitas-aplikasi', function () {
    return view('admin/identitas-aplikasi', [
        'active'=> 'identitas-aplikasi'
    ]);
});

Route::get('/katalog-buku', function () {
    return view('admin/katalog-buku');
});