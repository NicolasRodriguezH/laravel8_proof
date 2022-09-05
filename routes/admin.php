<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ConsultorController;
use App\Http\Controllers\Admin\CoordinatorController;
use App\Http\Controllers\Admin\SuperUserController;
use App\Http\Controllers\Admin\TellerController;

Route::get('', [AdminController::class, '__invoke'])->name('admin.home');

Route::resource('superusers', SuperUserController::class)->names('admin.superusers');


Route::resource('tellers', TellerController::class)->names('admin.tellers');

Route::resource('coordinators', CoordinatorController::class)->names('admin.coordinators');


Route::resource('consultors', ConsultorController::class)->names('admin.consultors');