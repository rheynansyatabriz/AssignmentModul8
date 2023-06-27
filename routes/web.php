<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

//Route Home
Route::get('home', [HomeController::class, 'index'])->name('home');

//Route Profile
Route::get('profile', ProfileController::class)->name('profile');

//Route Employee List
Route::resource('employees', EmployeeController::class);

//Route Edit
// Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');


Auth::routes();

Route::post('/login', [LoginController::class, 'authenticate']);











