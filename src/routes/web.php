<?php

use Illuminate\Support\Facades\Route;
use Adityaricki\Contact\Http\Controllers\ContactController;

Route::controller(ContactController::class)
    ->name('contacts.')
    ->group(function () {
        Route::get('/contacts', 'index')->name('index');
        Route::post('/contacts', 'store')->name('store');
    });
