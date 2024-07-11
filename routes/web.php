<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\HomeuserController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\RiwayatdataController;
use App\Http\Controllers\CPParticipantController;
use App\Http\Controllers\ParticipantuserController;


Route::get('/', function () {
        return view('welcomemain');
});

Route::get('/dashboard', function () {
    if (Auth::user()->usertype == 'admin'){
        return view('admin/dashboard');
    }
    if (Auth::user()->usertype == 'user'){
        return view('user/dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

// 2. Buat route nya di web, dibawah ini, lalu buat controller dengan nama CPParticipantController, setelah itu ke CPParticipantController dan ke function index
Route::get('admin/cpindex', [CPParticipantController::class, 'index'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    // Pastikan ada definisi route lainnya sesuai kebutuhan Anda

   //6.b 
   Route::get('admin/cpcreate', [CPParticipantController::class, 'create'])->name('admin.cpindex.cpcreate');
   //6.d
   Route::post('admin/cpstore', [CPParticipantController::class, 'store'])->name('admin.cpindex.cpstore');
   //6.i
   Route::get('admin/cpshow/{id}',[CPParticipantController::class, 'show'])->name('admin.cpindex.cpshow');
   //6.m
   Route::get('admin/cpedit/{id}', [CPParticipantController::class, 'edit'])->name('admin.cpindex.cpedit');
   //6.q
   Route::post('admin/cpupdate{id}', [CPParticipantController::class, 'update'])->name('admin.cpindex.cpupdate');
   //6.t
   Route::delete('admin/cpdestroy/{id}', [CPParticipantController::class, 'destroy'])->name('admin.cpindex.cpdestroy');
});

// route::get('admin/create', [ParticipantController::class, 'create'])->middleware(['auth', 'admin']);

route::get('user/dashboard', [HomeuserController::class, 'index'])->middleware('auth', 'user');
route::get('user/index', [ParticipantuserController::class, 'index'])->middleware(['auth', 'user']);

Route::middleware('auth')->group(function () {
    Route::get('user/show/{id}', [ParticipantuserController::class, 'show'])->name('user.show');
    Route::get('user/edit/{id}', [ParticipantuserController::class, 'edit'])->name('user.edit');
    Route::post('user/update{id}', [ParticipantuserController::class, 'update'])->name('user.update');

    Route::get('user/settings/index', [RiwayatController::class, 'index'])->name('user.settings.index');
    Route::get('user/settings/show/{tahun}', [RiwayatController::class, 'show'])->name('user.settings.show');
    Route::get('user/settings/riwayat/index/{idJurusan}/{tahun_created}', [RiwayatdataController::class, 'index'])->name('user.settings.riwayat.index');
});
