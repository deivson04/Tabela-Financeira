<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => ['jwt.verify'],
    'prefix' => 'v1'
], function ($router) {
Route::post('login', [AuthController::class, 'login']);
Route::get('users', [UserController::class, 'index']);
Route::post('store', [UserController::class, 'store']);
Route::put('atualizar/{id}', [UserController::class, 'update']);
Route::delete('apagar/{id}', [UserController::class, 'destroy']);

});


