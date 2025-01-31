<?php

use App\Http\Controllers\DatatablesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/livewire', function () {
    return view('livewire');
})->name('livewire');

Route::get('/datatables-client', [DatatablesController::class, 'indexClientSide'])->name('datatables-client');
Route::get('/datatables-server', [DatatablesController::class, 'indexServerSide'])->name('datatables-server');
