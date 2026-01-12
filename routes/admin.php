<?php
use Illuminate\Support\Facades\Route;

// admin
Route::get('/admin', 'App\Http\Controllers\adminController@adminHomeView');