<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeControllers ::class,'index'])->name('site.home');
Route::get('san-pham',[ProductControllers ::class,'index'])->name('site.product');
Route::get('chi-tiet-sp',[HomeControllers ::class,'detail'])->name('site.product.detail');
Route::get('lien-he',[ContactControllers ::class,'index'])->name('site.contact');


j