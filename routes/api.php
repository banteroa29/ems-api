<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeTypeController;
use App\Http\Controllers\EmployeeStatusController;
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

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::apiResource('employees', EmployeeController::class);
Route::apiResource('departments', DepartmentController::class);
Route::apiResource('designations', DesignationController::class);
Route::apiResource('employee-types', EmployeeTypeController::class);
Route::apiResource('employee-statuses', EmployeeStatusController::class);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::apiResource('user', UserController::class);
    Route::post('/logout',[AuthController::class,'logout']);
});
Route::fallback(function () {
    return response()->json([
        'status' => 404,
        'message' => 'Page not found'
    ]);
});
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
