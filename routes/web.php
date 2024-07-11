<?php

use App\Http\Controllers\Admin\AdminGaleriController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DaftarTamuController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Models\DaftarTamu;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::redirect('/', '/home');
Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
Route::get('/portfolio', [App\Http\Controllers\MainController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\MainController::class, 'contact'])->name('contact');
Route::get('/daftar-tamu', [DaftarTamuController::class, 'index'])->name('daftarTamu');
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::post('/admin', [AdminLoginController::class, 'authentication'])->name('adminauth');
Route::get('/login', [AdminLoginController::class, 'index'])->name('administrator');
Route::get('/admin', [AdminLoginController::class, 'logout'])->name('logout');

Route::get('/admin/galeri', [AdminGaleriController::class, 'index'])->name('admin.galeri.index');
Route::get('/admin/galeri/input', [AdminGaleriController::class, 'input'])->name('admin.galeri.input');
Route::post('/admin/galeri/store', [AdminGaleriController::class, 'store'])->name('admin.galeri.store');
Route::get('/admin/galeri/edit/{id}', [AdminGaleriController::class, 'edit'])->name('admin.galeri.edit');
Route::post('/admin/galeri/update', [AdminGaleriController::class, 'update'])->name('admin.galeri.update');
Route::get('/admin/galeri/delete/{id}', [AdminGaleriController::class, 'destroy'])->name('admin.galeri.delete');

// Route::get('/admin', function () {
//   return view('admin.adminindex');
// })->name('admin')->middleware('auth');

// Route::redirect('/login', '/adminlogin');
// Route::get('/adminlogin', function () {
//   return view('auth.login');
// })->name('login');
// Route::post('adminlogin', [AdminLoginController::class, 'authentication'])->name('adminlogin');
// Route::get('/admin', function () {
//   return view('admin.adminindex');
// })->name('admin')->middleware('auth');

// Route::get('/about', function () {
//   return view('about');
// })->name('about');

// Route::get('/', function () {
//   return view('home');
// })->name('home');
