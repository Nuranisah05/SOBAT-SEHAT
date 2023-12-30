<?php

//pangggil controller

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();


Route::group(['middleware' => ['auth']], function () {

    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });
    Route::get('/dashboard', [DashboardController::class, 'index']);
    // Buat route untuk peran admin dan manager
// Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/olahraga', [OlahragaController::class, 'index'])->name('produk');
//     Route::get('/olahraga/create', [OlahragaController::class, 'create']);
//     Route::post('/olahraga/store', [OlahragaController::class, 'store']);
//     Route::get('olahraga/edit/{id}', [OlahragaController::class, 'edit']);
//     Route::put('/olahraga/update/{id}', [OlahragaController::class, 'update']);
//     Route::get('/olahraga/delete/{id}', [OlahragaController::class, 'destroy']);
// });
});
