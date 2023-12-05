<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
Route::get('company', [CompanyController::class, 'index'])->name('company.index');
Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('company', [CompanyController::class, 'store'])->name('company.store');
Route::get('company/{company}', [CompanyController::class, 'show'])->name('company.show');
Route::get('company/{company}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::patch('company/{company}', [CompanyController::class, 'update'])->name('company.update');
Route::delete('company/{company}', [CompanyController::class, 'destroy'])->name('company.destroy');

Route::get('employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employees/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employees', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employees/{employee}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::patch('employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});

require __DIR__.'/auth.php';
