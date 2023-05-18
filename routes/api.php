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

Route::post('send_mobile_verify_otp', [ApiController::class, 'send_mobile_verify_otp']);
Route::post('user_registration', [ApiController::class, 'user_registration']);
Route::get('get_all_data_admin', [ApiController::class, 'get_all_data_admin']);
