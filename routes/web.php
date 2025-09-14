<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/responsibility-form', [FormController::class, 'showForm']);
Route::post('/responsibility-form', [FormController::class, 'submitForm'])->name('form.submit');
