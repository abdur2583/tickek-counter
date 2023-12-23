<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\TicketController;

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
    return view('admin');
});

Route::get('/admin', [adminController::class, 'index'])->name('admin');

Route::get('/get-tickets', [TicketController::class, 'getTickets'])->name('tickets');
Route::post('/store-tickets', [TicketController::class, 'storeTickets'])->name('store-tickets');