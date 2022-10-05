<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MysqlController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);

Route::post('/registrarCurp', [MysqlController::class,'registrarCurp'])->name('registrarCurp');




