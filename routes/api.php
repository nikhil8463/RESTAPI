<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Routes For Department
Route::group(['prefix' => 'department'], function () {
    Route::get('/', [DepartmentController::class,'index']);
	Route::get('details/{id}', [DepartmentController::class,'details']);
    Route::post('insert', [DepartmentController::class, 'insert']);
    Route::patch('update/{id}', [DepartmentController::class, 'update']);
	Route::delete('delete/{id}', [DepartmentController::class,'delete']);
});

//Routes for employee
Route::group(['prefix' => 'employee'], function () {
    Route::get('/', [EmployeeController::class,'index']);
	Route::get('details/{id}', [EmployeeController::class,'details']);
    Route::post('insert', [EmployeeController::class, 'insert']);
    Route::patch('update/{id}', [EmployeeController::class, 'update']);
	Route::delete('delete/{id}', [EmployeeController::class,'delete']);
});
