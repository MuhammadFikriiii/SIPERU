<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->name('admin.')->middleware('auth.admin')->group(function () {


});
Route::get('/admin/users', [UsersController::class,'index'])->name('admin.users');
Route::get('/admin/users/create', [UsersController::class,'create'])->name('admin.users.create');
Route::post('/admin/users', [UsersController::class,'store'])->name('admin.users.store');
