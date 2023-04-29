<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;



Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('/dashboard', 'dashboard')->name('dashboard.index');
    Route::get('/menu-list', 'menu')->name('menu.index');
    Route::get('/menu-category', 'menuCategory')->name('menu.category');
});

Route::controller(HomeController::class)->group(function (){
    Route::post('/menu-save', 'storeMenu')->name('menu.store');
    Route::post('/menu-category-save', 'storeMenuCategory')->name('menuCategory.store');
});

Route::get('/verify-email/{verificationToken}', [HomeController::class, 'verifySubscriber'])->name('subscriber.verify');
