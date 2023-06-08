<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('location', [ApiController::class, 'location']);
Route::get('get_area_by_id', [ApiController::class, 'get_area_by_id']);


Route::post('send_mobile_verify_otp', [ApiController::class, 'send_mobile_verify_otp']);
Route::post('user_registration', [ApiController::class, 'user_registration']);
Route::get('get_all_data_admin', [ApiController::class, 'get_all_data_admin']);
Route::post('update_admin_data', [ApiController::class, 'update_admin_data']);
Route::get('client', [ApiController::class, 'client']);
Route::get('product', [ApiController::class, 'product']);
Route::post('field_executive', [ApiController::class, 'field_executive']);
Route::get('emp_name', [ApiController::class, 'emp_name']);
Route::get('property_type', [ApiController::class, 'property_type']);
Route::get('get_user_data', [ApiController::class, 'get_user_data']);


Route::get('category', [ApiController::class, 'category']);
Route::get('tags', [ApiController::class, 'tags']);

Route::post('field_executive_step1', [ApiController::class, 'field_executive_step1']);
Route::post('field_executive_step2', [ApiController::class, 'field_executive_step2']);
Route::post('field_executive_step3', [ApiController::class, 'field_executive_step3']);

