<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\MarketerController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('customers',CustomerController::class);
Route::resource('users',UserController::class);
Route::resource('offices',OfficeController::class);
Route::resource('agents',AgentController::class);
Route::resource('marketers',MarketerController::class);
Route::resource('tasks',TaskController::class);
Route::resource('roles',RoleController::class);
Route::resource('permissions',PermissionController::class);
// Route::get('/',[UserController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
