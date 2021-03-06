<?php

use App\Bookable;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/bookables', function (Request $request){
//     return Bookable::all();
// });

// Route::get('/bookable/{id}', function (Request $request, $id){
//     return Bookable::findOrFail($id);
// });

Route::apiResource('/bookables', 'Api\BookableController')->only(['index', 'show']);
Route::get('/bookables/{id}/availability', 'Api\BookableAvailabilityController')->name('bookables.availability.show');
Route::get('/bookables/{id}/reviews', 'Api\BookableReviewController')->name('bookables.reviews.index');