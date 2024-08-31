<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mainpage',function(){
    return view('This is it, we making progress 
    finally !');
});