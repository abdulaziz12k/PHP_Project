<?php

use Illuminate\support\Facades\Route;


Route::get('/',function(){
    return view('home');
});