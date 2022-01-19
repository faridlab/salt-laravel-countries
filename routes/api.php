<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltCountries\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: COUNTRIES RESOURCES
    Route::get("countries", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("countries", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("countries/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("countries/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("countries/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("countries/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("countries/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("countries/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("countries/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("countries/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("countries/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('countries.provinces', 'ApiNestedResourcesController');

    // API: PROVINCES RESOURCES
    Route::get("provinces", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("provinces", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("provinces/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("provinces/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("provinces/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("provinces/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("provinces/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("provinces/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("provinces/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("provinces/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("provinces/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('provinces.cities', 'ApiNestedResourcesController');

    // API: CITIES RESOURCES
    Route::get("cities", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("cities", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("cities/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("cities/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("cities/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("cities/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("cities/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("cities/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("cities/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("cities/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("cities/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('cities.districts', 'ApiNestedResourcesController');

    // API: DISTRICTS RESOURCES
    Route::get("districts", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("districts", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("districts/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("districts/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("districts/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("districts/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("districts/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("districts/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("districts/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("districts/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("districts/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('districts.subdistricts', 'ApiNestedResourcesController');

    // API: SUBDISTRICTS RESOURCES
    Route::get("subdistricts", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("subdistricts", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("subdistricts/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("subdistricts/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("subdistricts/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("subdistricts/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("subdistricts/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("subdistricts/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("subdistricts/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("subdistricts/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("subdistricts/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID


    // API: POSTALCODE RESOURCES
    Route::get("postalcode", 'ApiCountriesResourcesController@index'); // get entire collection
    Route::post("postalcode", 'ApiCountriesResourcesController@store'); // create new collection

    Route::get("postalcode/trash", 'ApiCountriesResourcesController@trash'); // trash of collection

    Route::post("postalcode/import", 'ApiCountriesResourcesController@import'); // import collection from external
    Route::post("postalcode/export", 'ApiCountriesResourcesController@export'); // export entire collection
    Route::get("postalcode/report", 'ApiCountriesResourcesController@report'); // report collection

    Route::get("postalcode/{id}/trashed", 'ApiCountriesResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("postalcode/{id}/restore", 'ApiCountriesResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}/delete", 'ApiCountriesResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("postalcode/{id}", 'ApiCountriesResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("postalcode/{id}", 'ApiCountriesResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("postalcode/{id}", 'ApiCountriesResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}", 'ApiCountriesResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

});
