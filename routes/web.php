<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController; //add the ControllerNameSpace
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource("/employee", EmployeeController::class);