<?php

use App\Http\Controllers\BonusController;
use App\Http\Controllers\PaymentsController;
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

Route::get('/', function () {
    return view('introduction');
});

Route::get('/instrucciones', function () {
    return view('instrucciones');
})->name('instrucciones');

Route::get('/pagos', [PaymentsController::class, 'index'])->name('payments');
Route::get('/pagos/crear', [PaymentsController::class, 'create'])->name('payments-create');
Route::post('/pagos/crear', [PaymentsController::class, 'store'])->name('payments-store');
Route::get('/pagos/editar/{id}', [PaymentsController::class, 'edit'])->name('payments-edit');
Route::put('/pagos/editar/{id}', [PaymentsController::class, 'update'])->name('payments-update');
Route::delete('/pagos/eliminar/{id}', [PaymentsController::class, 'destroy'])->name('payments-destroy');
Route::get('punto-extra', [BonusController::class, 'index'])->name('extra-point');
Route::get('punto-extra/instrucciones', function () {
    return view('payments.bonus-instrucciones');
})->name('extra-point-instrucciones');
