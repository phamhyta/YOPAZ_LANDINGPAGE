<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::get('/', [
    CustomerController::class, 'index'
]) -> name('customer.index');

Route::post('/', [
    CustomerController::class, 'contact'
])->name('customer.contact');
