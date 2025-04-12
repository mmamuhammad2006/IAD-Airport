<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\DepartureController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['web'])->group(function () {
    Route::get('/cities', [Controller::class, 'cities']);
    Route::get('/airports/{airportId}', [AirportController::class, 'airport']);

    // for Resturants
    Route::get('/places/{category}', [PlaceController::class, 'places']);
    Route::get('/lounges/places/{category}', [PlaceController::class, 'loungePlaces']);
    Route::get('/place/{category}/{hotel}', [PlaceController::class, 'placeAPI']);
    Route::get('/place/Data/{hotelCode}/{category}', [PlaceController::class, 'placeData']);
    Route::get('/lounges/place/Data/{hotelCode}/{category}', [PlaceController::class, 'loungesPlaceData']);

    // flights
    Route::get('/departures', [DepartureController::class, 'departures']);
    Route::get('/arrivals', [ArrivalController::class, 'arrivals']);

    // airlines
    Route::get('/airlines', [AirlineController::class, 'index']);
    Route::get('/airline/{iata}', [AirlineController::class, 'airline']);
});


// search flights using IATA
Route::post('/flight/{iata}', [Controller::class, 'trackFlight']);
