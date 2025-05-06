<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get("/", [UserController::class, 'create'])->name("user.create");
route::post("/user/store", [UserController::class, 'store'])->name("user.store");

route::get("/contact/create", [ContactController::class, 'create'])->name("contact.create");
route::post("/contact/store", [ContactController::class, 'store'])->name("contact.store");

// use App\Http\Controllers\AdminController;

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');