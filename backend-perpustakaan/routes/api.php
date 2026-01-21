<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;


Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('/books', BookController::class);
    
