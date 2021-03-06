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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('phones',function(){
//     return response(Phones::all(),200);
// });

// Route::get('phones/{phones}', function($phoneID){
//     return response(Phone::find($phoneID),200);
    
// });


// Now the products are injected in Controller, and Laravel Implicity binds it

Route::get('phones','PhonesController@index');
Route::get('phones/{phone}','PhonesController@show');
Route::post('phones','PhonesController@store');
Route::put('phones/{phone}','PhonesController@update');
Route::delete('phones/{phone}','PhonesController@delete');

