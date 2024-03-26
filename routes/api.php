<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/testes', function () {
    return response()->json(['message' => 'ok']);
});

Route::resource('user', UserController::class);