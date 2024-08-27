<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController; //add the ControllerNameSpace
use App\Http\Controllers\StudentController;
 
Route::get('/', function () {
    return view('welcome');
Route::resource("/employee", EmployeeController::class);
Route::resource("/student", StudentController::class);
Route::controller(StripePaymentController::class)->group(function()


Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
 
