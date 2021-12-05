<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| salt laravel countries Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/

Route::namespace('Controllers')->group(function () {

  Route::get("countries", 'ResourcesController@index')->name('countries.index');
  Route::get("countries/trash", 'ResourcesController@trash')->name('countries.trash');
  Route::get("countries/create", 'ResourcesController@create')->name('countries.create.show');
  Route::post("countries", 'ResourcesController@store')->name('countries.create');

  Route::get("countries/import", 'ResourcesController@import')->name('countries.import.show');
  Route::post("countries/import", 'ResourcesController@doImport')->name('countries.import');
  Route::get("countries/export", 'ResourcesController@export')->name('countries.export.show');
  Route::post("countries/export", 'ResourcesController@doExport')->name('countries.export');

  Route::get("countries/{id}", 'ResourcesController@show')->name('countries.show');
  Route::get("countries/{id}/edit", 'ResourcesController@edit')->name('countries.edit');
  Route::put("countries/{id}", 'ResourcesController@update')->name('countries.update');
  Route::delete("countries/{id}", 'ResourcesController@destroy')->name('countries.delete');

  Route::get("countries/{id}/trashed", 'ResourcesController@trashed')->name('countries.trashed');
  Route::delete("countries/{id}/delete", 'ResourcesController@delete')->name('countries.deleted');
  Route::delete("countries/trash/empty", 'ResourcesController@empty')->name('countries.empty');
  Route::put("countries/trash/restore", 'ResourcesController@putBack')->name('countries.restore.all');
  Route::put("countries/{id}/restore", 'ResourcesController@restore')->name('countries.restore');
});