<?php

use App\Http\Controllers\Api\ApiController;
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

Route::get('company',[ApiController::class,'company']);
Route::get('categories',[ApiController::class,'categories']);
Route::post('cart',[ApiController::class,'addToCart']);
Route::get('posts',[ApiController::class,'getPosts']);
Route::get('poems',[ApiController::class,'getPoems']);
Route::get('stories',[ApiController::class,'getStories']);
Route::get('search',[ApiController::class,'search']);
Route::get('about',[ApiController::class,'getAbout']);
Route::post('feedback',[ApiController::class,'feedback']);


