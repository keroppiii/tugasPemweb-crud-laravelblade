<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;

Route::resource('departemens', DepartemenController::class);
Route::get('/', function () {
    return redirect()->route('departemens.index');
});