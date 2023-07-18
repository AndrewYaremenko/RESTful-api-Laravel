<?php

use App\Http\Controllers\CountryLangController;
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

Route::get('/countries', [CountryLangController::class, 'getCountries']);
Route::get('/countries/{id}', [CountryLangController::class, 'getCountry']);
Route::post('/countries', [CountryLangController::class, 'saveCountry']);
Route::patch('/countries/{id}', [CountryLangController::class, 'updateCountry']);
Route::delete('/countries/{id}', [CountryLangController::class, 'deleteCountry']);