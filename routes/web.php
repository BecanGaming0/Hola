<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\loginCtrl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginCtrl::class, 'loginView']);