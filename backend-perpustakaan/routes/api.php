<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;


Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('/books', BookController::class);
Route::post('/pinjam', [TransactionController::class,'store']);
Route::put('/kembali/{id}', [TransactionController::class,'returnBook']);

    
