<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\FrontendController@HomeView')->name('home');
Route::get('/about', 'App\Http\Controllers\FrontendController@AboutView')->name('about');
Route::get('/resume', 'App\Http\Controllers\FrontendController@ResumeView')->name('resume');
Route::get('/services', 'App\Http\Controllers\FrontendController@ServicesView')->name('services');
Route::get('/portfolio', 'App\Http\Controllers\FrontendController@PortfolioView')->name('portfolio');
Route::get('/portfolio-detail', 'App\Http\Controllers\FrontendController@PortfolioDetailView')->name('portfolio-detail');
Route::get('/service-detail', 'App\Http\Controllers\FrontendController@ServiceDetailView')->name('service-detail');
Route::get('/contact', 'App\Http\Controllers\FrontendController@ContactView')->name('contact');

