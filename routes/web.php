<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/role', [RoleController::class, 'index'])->name('role.index');