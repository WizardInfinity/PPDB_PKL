<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FinalProjectController;
use App\Http\Controllers\ExtracurricularController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', [LayoutController::class, 'index']);
Route::controller(LayoutController::class)->group(function (){
    Route::get('/layouts/home', 'home');
    Route::get('/layouts/index', 'index');
});

Route::get('/tugas', [TugasController::class, 'index']);
Route::controller(TugasController::class)->group(function (){
    Route::get('tugas', 'tugas');
});

Route::get('/formkelas', [KelasController::class, 'formkelas']);
Route::get('/formkelas-edit/{id}', [KelasController::class, 'edit']);
Route::put('/tabelkelas/{id}', [KelasController::class, 'ubah']);

Route::get('/tabelkelas', [KelasController::class, 'tabelkelas']);
Route::post('/tabelkelas', [KelasController::class, 'hasil']);
Route::get('/tabelkelas-delete/{id}', [KelasController::class, 'hapus']);
Route::delete('/tabelkelas-destroy/{id}', [KelasController::class, 'lenyap']);

Route::get('/formsiswa', [SiswaController::class, 'formsiswa']);
Route::get('/formsiswa-edit/{id}', [SiswaController::class, 'edit']);
Route::put('/tabelsiswa/{id}', [SiswaController::class, 'ubah']);

Route::get('/tabelsiswa', [SiswaController::class, 'tabelsiswa']);
Route::post('/tabelsiswa', [SiswaController::class, 'hasil']);
Route::get('/tabelsiswa-delete/{id}', [SiswaController::class, 'hapus']);
Route::delete('/tabelsiswa-destroy/{id}', [SiswaController::class, 'lenyap']);


Route::get('/bootstrap', function () {
    return view('bootstrap', ['name' => 'Habieb',
        'welcome' => 'Welcome To Our Website',
        'emote' => '😎']);
});

Route::get('/home', function () {
    return view('home', [
        'name' => 'W I Z A R D',
        'role' => 'exp laner',
        'buah' => ["jeruk", "pisang", "anggur", "melon", "lemon"],
    ]);
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register_create']);

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student-add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
Route::get('/student-delete/', [StudentController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);

Route::get('/ekskul', [ExtracurricularController::class, 'index']);
Route::get('/ekskul-detail/{id}', [ExtracurricularController::class, 'show']);

Route::get('/teacher', [TeacherController::class, 'index']); 


Route::get('/template', [FinalProjectController::class, 'index']);

Route::get('/website', [FinalProjectController::class, 'website'])->name('loginfinalproject')->middleware('guest');

Route::get('/finalproject', [FinalProjectController::class, 'home'])->middleware('auth');

Route::get('/formpendaftaran', [FinalProjectController::class, 'formpendaftaran'])->middleware('auth');
Route::post('/formpendaftaran', [FinalProjectController::class, 'tambah_formpendaftaran'])->middleware('auth');
Route::get('/formpendaftaran-edit/{id}', [FinalProjectController::class, 'edit_formpendaftaran'])->middleware('auth','must-admin');

Route::get('/statuspenerimaan', [FinalProjectController::class, 'statuspenerimaan'])->middleware('auth');
Route::put('/statuspenerimaan/{id}', [FinalProjectController::class, 'ubah_statuspenerimaan'])->middleware('auth');
Route::get('/statuspenerimaan-delete/{id}', [FinalProjectController::class, 'konfirmasi_hapus'])->middleware('auth','must-admin');
Route::delete('/statuspenerimaan-lenyap/{id}', [FinalProjectController::class, 'lenyap'])->middleware('auth');

Route::get('/statuspenerimaan-hasil/{id}', [FinalProjectController::class, 'statuspenerimaan_hasil'])->middleware('auth','must-admin');
Route::put('/statuspenerimaan-hasil/{id}', [FinalProjectController::class, 'statuspenerimaan_hasil_ubah'])->middleware('auth');
Route::get('/hasilpeserta', [FinalProjectController::class, 'hasilpeserta'])->middleware('auth');

