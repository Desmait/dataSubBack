<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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



Route::group([

    'middleware' => 'api'

], function ($router) {

  Route::resource('users', UserController::class);
  Route::post('login', [LoginController::class, 'login']);
  Route::post('logout', [LoginController::class, 'logout']);
  Route::post('refresh', [LoginController::class, 'refresh']);
  Route::post('me', [LoginController::class, 'me']);
  Route::post('register', [LoginController::class, 'register']);

});
