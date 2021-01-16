<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/index', function () {
    return view('AdminLayout/index');
});

Route::get('/master', function () {
    return view('master');
});

// Route::get('/detail', [HomeController::class, 'detail'])->name('detail');

Route::get('/list', [HomeController::class, 'list'])->name('list');

Route::get('/dosen', [HomeController::class, 'dosen'])->name('dosen');

Route::get('/MyInformation', [HomeController::class, 'MyInformation'])->name('MyInformation');

Route::get('/organization', [HomeController::class, 'organization'])->name('organization');

Route::get('/createmhs', [HomeController::class,'create']);

Route::post('/store', [HomeController::class,'store']);

Route::get('list/detail/{mahasiswa:slug}', [HomeController::class, 'detail']);

Route::patch('list/update/{mahasiswa:slug}', [HomeController::class, 'update']);

Route::delete('list/delete/{mahasiswa:slug}', [HomeController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
