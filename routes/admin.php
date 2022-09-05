<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SuperUserController;

Route::get('', [AdminController::class, '__invoke'])->name('admin.home');

Route::resource('superusers', SuperUserController::class)->names('admin.superusers');