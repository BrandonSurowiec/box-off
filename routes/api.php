<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1', 'namespace' => 'API'/*, 'middleware' => 'auth:api'*/], function () {
    /*
        Api Controller for Clubs  
    */
    Route::apiResource('clubs', 'ClubController'); 
    /*
        Api Controller for Locations   
    */
    Route::apiResource('locations', 'LocationController'); 
    /*
        Api Controller for Status'   
    */
    Route::apiResource('statuses', 'StatusController'); 
    /*
        Api Controller for Abouts  
    */
    Route::apiResource('abouts', 'AboutController');
});