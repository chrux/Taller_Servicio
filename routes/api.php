<?php

use Illuminate\Http\Request;
use taller_servicio\Manufacturer;

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

Route::get('manufacturers', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Manufacturer::all();
});
 
Route::get('manufacturers/{id}', function($id) {
    return Manufacturer::find($id);
});

Route::post('manufacturers', function(Request $request) {
    return Manufacturer::create($request->all());
});

Route::put('manufacturers/{id}', function(Request $request, $id) {
    $manufacturer = Manufacturer::findOrFail($id);
    $manufacturer->update($request->all());

    return $manufacturer;
});

Route::delete('manufacturers/{id}', function($id) {
    $manufacturer = Manufacturer::find($id);
    if ($manufacturer) {
        $manufacturer->delete();
    }

    return response(null, 204);
});
