<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::group(['middleware' => 'admin'], function(){

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/student/list', [StudentController::class, 'list'])->name('admin.student.list');
    Route::get('admin/student/add', [StudentController::class, 'add'])->name('admin.student.add');
    Route::post('admin/student/store', [StudentController::class, 'store'])->name('admin.student.store');
    Route::get('admin/student/edit', [StudentController::class, 'edit'])->name('admin.student.edit');

    Route::get('admin/meal/menu', [StudentController::class, 'menu'])->name('admin.meal.menu');


});

Route::group(['middleware' => 'student'], function () {

    Route::get('student/dashboard', [DashboardController::class, 'dashboard'])->name('student.dashboard');
    Route::get('student/menu', [StudentController::class, 'menu'])->name('student.menu');

});