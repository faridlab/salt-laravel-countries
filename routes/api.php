<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('Controllers')
    ->middleware(['api'])
    ->prefix($version)
    ->group(function () {

  // DEFAULT: API RESOURCES
  Route::get("{collection}", 'Api\ApiResourcesController@index'); // get entire collection
  Route::post("{collection}", 'Api\ApiResourcesController@store'); // create new collection

  Route::get("{collection}/trash", 'Api\ApiResourcesController@trash'); // trash of collection

  Route::post("{collection}/import", 'Api\ApiResourcesController@import'); // import collection from external
  Route::post("{collection}/export", 'Api\ApiResourcesController@export'); // export entire collection
  Route::get("{collection}/report", 'Api\ApiResourcesController@report'); // report collection

  Route::get("{collection}/{id}/trashed", 'Api\ApiResourcesController@trashed')->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

  // RESTORE data by ID (id), selected IDs (selected), and All data (all)
  Route::post("{collection}/{id}/restore", 'Api\ApiResourcesController@restore')->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

  // DELETE data by ID (id), selected IDs (selected), and All data (all)
  Route::delete("{collection}/{id}/delete", 'Api\ApiResourcesController@delete')->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

  Route::get("{collection}/{id}", 'Api\ApiResourcesController@show')->where('id', '[a-zA-Z0-9]+'); // get collection by ID
  Route::put("{collection}/{id}", 'Api\ApiResourcesController@update')->where('id', '[a-zA-Z0-9]+'); // update collection by ID
  Route::patch("{collection}/{id}", 'Api\ApiResourcesController@patch')->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
  // DESTROY data by ID (id), selected IDs (selected), and All data (all)
  Route::delete("{collection}/{id}", 'Api\ApiResourcesController@destroy')->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

});
