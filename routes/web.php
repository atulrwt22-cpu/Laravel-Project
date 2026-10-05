<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

Route::get('/', [usercontroller::class, 'index']);
Route::get('user', [usercontroller::class, 'index']);
Route::get('adduser', [usercontroller::class, 'addUser']);

