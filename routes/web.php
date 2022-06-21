<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('jabatan', 'JabatanController'); 
Route::resource('file', 'FileController'); 

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/admin/user/edit', function () {
    return view('admin.user-edit');
});
Route::get('/admin/jabatan', function () {
    return view('admin.jabatan');
});
Route::get('/admin/jabatan/add', function () {
    return view('admin.jabatan-add');
});
Route::get('/admin/bidang', function () {
    return view('admin.bidang');
});
Route::get('/admin/bidang/add', function () {
    return view('admin.bidang-add');
});
Route::get('/admin/profile', function () {
    return view('admin.profile');
});


Route::get('/user', function () {
    return view('user.index');
});
Route::get('/user/file', function () {
    return view('user.file');
});
Route::get('/user/laporan', function () {
    return view('user.laporan');
});
Route::get('/user/acclaporan', function () {
    return view('user.acc-laporan');
});
Route::get('/user/acclaporan/acc', function () {
    return view('user.acc-laporan-edit');
});
Route::get('/user/profile', function () {
    return view('user.profile');
});

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });