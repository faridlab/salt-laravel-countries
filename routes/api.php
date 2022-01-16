<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltCountries\Controllers')
  ->middleware(['api'])
  ->prefix("api/{$version}")
  ->group(function () {

  // API: COUNNTRIES RESOURCES
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

});
