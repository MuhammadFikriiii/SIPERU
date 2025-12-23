<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->name('admin.')->middleware('auth.admin')->group(function () {


});
Route::get('/users/create', [UsersController::class,'create'])->name('users.create');
Route::get('/users', [UsersController::class,'store'])->name('users.store');
