<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'dashboard']);

// Route::get('departments/index', function () {
//     return view('management.departments.index');
// })->name('departmentsIndex');

Route::get('/department/index', [DepartmentController::class, 'index'])->name('departmentsIndex');

Route::get('/department/create', [DepartmentController::class, 'create'])->name('departmentsCreate');

Route::post('/department/store', [DepartmentController::class, 'store'])->name('departmentsStore');

Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('departmentsEdit');

Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('departmentsUpdate');

Route::post('/department/delete/{id}', [DepartmentController::class, 'delete'])->name('departmentsDelete');

Route::get('users/index', function () {
    return view('management.users.index');
})->name('usersIndex');
