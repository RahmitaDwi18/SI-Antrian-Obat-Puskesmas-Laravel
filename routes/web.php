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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin/halaman_admin', function() {
    return view('');
})->name('admin');





Route::group(['middleware' => ['auth', 'role:admin']], function() {

    Route::get('/superadmin', function() {
    });
    Route::get('/polys/create', [PolyController::class,'create'])->name('polys.create');
    Route::post('/polys/store', [PolyController::class,'store'])->name('polys.store');
    Route::get('/polys/index', [PolyController::class,'index'])->name('polys.index');
    Route::get('/polys/{poly}', [PolyController::class,'show'])->name('polys.show');

    Route::get('/polys/{poly}/edit', [PolyController::class,'edit'])->name('polys.edit');
    Route::put('/polys/{poly}', [PolyController::class,'update'])->name('polys.update');
    Route::delete('/polys/{poly}', [PolyController::class,'destroy'])->name('polys.destroy');


    Route::get('/doctors/create', [DoctorController::class,'create'])->name('doctors.create');
    Route::post('/doctors/store', [DoctorController::class,'store'])->name('doctors.store');
    Route::get('/doctors/index', [DoctorController::class,'index'])->name('doctors.index');
    Route::get('/doctors/{doctor}', [DoctorController::class,'show'])->name('doctors.show');

    Route::get('/doctors/{doctor}/edit', [DoctorController::class,'edit'])->name('doctors.edit');
    Route::put('/doctors/{doctors}', [DoctorController::class,'update'])->name('doctors.update');
    Route::delete('/doctors/{doctors}', [DoctorController::class,'destroy'])->name('doctors.destroy');
});

Route::group(['middleware' => ['auth', 'role:dokter']], function() {

    Route::get('/dokter', function() {
    });
    Route::get('/patients/create', [PatientController::class,'create'])->name('patients.create');
    Route::post('/patients/store', [PatientController::class,'store'])->name('patients.store');
    Route::get('/patients/index', [PatientController::class,'index'])->name('patients.index');
    Route::get('/patients/{patient}', [PatientController::class,'show'])->name('patients.show');

    Route::get('/patients/{patient}/edit', [PatientController::class,'edit'])->name('patients.edit');
    Route::put('/patients/{patient}', [PatientController::class,'update'])->name('patients.update');
    Route::delete('/patients/{patient}', [PatientController::class,'destroy'])->name('patients.destroy');

});

Route::group(['middleware' => ['auth', 'role:apoteker']], function() {
    Route::get('/apoteker', function() {

    });
});




Route::group(['middleware' => ['auth']], function() {






});

