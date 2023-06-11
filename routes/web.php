<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\KonsepController;
use App\Http\Controllers\Controller;

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

Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'proses_login']);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/guru/option', function () {
        return view('guru/option');
    });
    
    Route::get('/siswa/option', function () {
        return view('siswa/option');
    });  
    Route::get('/siswa/materi', function () {
        return view('siswa/materi');
    });  

    Route::get('/siswa/false', function () {
        return view('siswa/false');
    });  
    Route::get('/siswa/true', function () {
        return view('siswa/true');
    });  

    Route::group(['middleware' => ['cek_login:guru']], function () {
        Route::get('/guru/materi', [GuruController::class, 'materi_guru']);
        Route::get('/guru/materi/materi_add', [GuruController::class, 'materi_create']);
        Route::post('/guru/materi/materi_add', [GuruController::class, 'materi_save']);
        Route::get('/guru/materi/materi_post/{id}', [GuruController::class, 'materi_show_guru']);
    
        Route::get('/guru/konsep', [GuruController::class, 'konsep_guru']);
        Route::get('/guru/konsep/konsep_add', [GuruController::class, 'konsep_create']);
        Route::post('/guru/konsep/konsep_add', [GuruController::class, 'konsep_save']);
        Route::get('/guru/konsep/konsep_post/{id}', [GuruController::class, 'konsep_show_guru']);

        Route::resource('guru', GuruController::class);
    });

    Route::group(['middleware' => ['cek_login:siswa']], function () {
        Route::get('/siswa/list_materi', [SiswaController::class, 'materi_siswa']);
        Route::get('/siswa/materi_post/{id}', [SiswaController::class, 'materi_show_siswa']);
    
        Route::get('/siswa/konsep', [SiswaController::class, 'konsep_siswa']);
        Route::get('/siswa/konsep_post/{id}', [SiswaController::class, 'konsep_show_siswa']);
        Route::post('/siswa/konsep_post/{id}', [SiswaController::class, 'answer_save']);

        Route::resource('siswa', SiswaController::class);
    });

    // Route::group(['middleware' => ['auth', 'cek_login:guru,siswa']], function() {
    //     Route::get('/redirect', [RedirectController::class, 'cek']);
    //     Route::get('/logout', [AuthController::class, 'logout']); 
    // });

    // Route::get('/redirect', [RedirectController::class, 'cek']);
    Route::get('/logout', [AuthController::class, 'logout']); 
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
