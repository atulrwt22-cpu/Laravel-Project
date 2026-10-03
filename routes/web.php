<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function() {
    return view ('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('about/{name}', function($name) {
    return $name;
});

Route::get('home/{name}/{other}', function($name, $other) {
    return view('home', ['name' => $name , 'other' => $other]);
});

Route::get('/contact', function () {
    return "<h1>Contact Page</h1>";
});

Route::get('/services', function(){
    return "<h1>Services Page</h1>";
});
