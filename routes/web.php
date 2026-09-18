<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/stecu', [AuthController::class, 'memulaim']);

