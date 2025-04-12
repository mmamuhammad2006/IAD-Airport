<?php

use App\Jobs\testJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\DepartureController;
use App\Http\Controllers\ShowPagesController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\SubscriptionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ShowPagesController::class, 'home'])->name('home');
Route::get('/about-us', [ShowPagesController::class, 'aboutUs']);
Route::get('/privacy-policy', [ShowPagesController::class, 'privacyPolicy']);
Route::get('/terms-of-use', [ShowPagesController::class, 'termsOfUse']);
Route::get('/contact-us', [ShowPagesController::class, 'contactUs']);
Route::get('/hotels', [ShowPagesController::class, 'hotels']);
Route::get('/restaurant', [ShowPagesController::class, 'restaurant']);
Route::get('/parking', [ShowPagesController::class, 'parking']);
Route::get('/terminal', [ShowPagesController::class, 'terminal']);
Route::get('/car-rental', [ShowPagesController::class, 'carRental']);
Route::get('/lounges', [ShowPagesController::class, 'lounges']);
Route::get('/transportations', [ShowPagesController::class, 'transportation']);
Route::get('/iad-airlines', [ShowPagesController::class, 'airlines']);
Route::get('/iad-airline/aer-lingus', [ShowPagesController::class, 'airlineDetails']);
Route::get('/arrivals', [ShowPagesController::class, 'arrivals']);
Route::get('/departures', [ShowPagesController::class, 'departures']);
Route::get('/blog', [BlogController::class, 'showBlogsToUser']);
Route::get('/blog/{id}', [BlogController::class, 'showSingleBlog'])->name('show_single_blog');
Route::get('/nearby/{category}/{place}', [PlaceController::class, 'show']);

Route::post('/webhook/endpoint', [DepartureController::class, 'sendWebHook']);
// Missing pages urls
Route::get('/shuttle-services', [ShowPagesController::class, 'shuttleServices']);
Route::get('/shopping-dining', [ShowPagesController::class, 'shoppingDining']);
Route::get('/terminal-concourses', [ShowPagesController::class, 'terminalConcourses']);
Route::get('/vip-lounge-access', [ShowPagesController::class, 'vipLoungeAccess']);
Route::get('/taxis', [ShowPagesController::class, 'taxis']);
Route::get('/faqs', [ShowPagesController::class, 'faqs']);
Route::get('/black-car-service', [ShowPagesController::class, 'blackCarService']);
Route::get('/disabilities-services', [ShowPagesController::class, 'disabilitiesServices']);
Route::get('/amenities-services', [ShowPagesController::class, 'amenitiesServices']);

Route::post('/subscription', [SubscriptionController::class, 'subscribe']);

// Missing pages urls ends
Route::get('test-job', function () {
    dispatch(new testJob());
    return 'test job dispatched';
});

Route::view('/map', 'mainPages.airlabsMap.airlabsMap');


// Route::get('/places/images', [HomeController::class, 'googleDataJson']);