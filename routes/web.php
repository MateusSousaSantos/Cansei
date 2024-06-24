<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class, 'index']);
Route::get('/produtos', [ProdutoController::class,'produtos']);
Route::get('/create', [ProdutoController::class, 'create']);
Route::post('/store', [ProdutoController::class, 'store']);