<?php

use Illuminate\support\Facades\Route;


Route::get('/mainpage',function(){
    return view('mainpage');
});