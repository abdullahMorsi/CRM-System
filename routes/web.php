<?php

use App\Http\Controllers\CustomerActionController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employee/create', [EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employee', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employee', function(){
    return abort('404');
});

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/customers/create',  [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers',  [CustomersController::class, 'store'])->name('customers.store');

Route::post('/customers/action-name', [CustomerActionController::class, 'actionName'])->name('customers.action-name');

Route::get('/', [HomeController::class, 'index'])->name('home');
