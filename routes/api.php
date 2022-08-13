<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltCountries\Controllers\ApiCountriesResourcesController;
use SaltCountries\Controllers\ApiNestedResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: COUNTRIES RESOURCES
    Route::get("countries", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("countries", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("countries/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("countries/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("countries/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("countries/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("countries/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("countries/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("countries/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("countries/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("countries/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('countries.provinces', ApiNestedResourcesController::class);

    // API: PROVINCES RESOURCES
    Route::get("provinces", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("provinces", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("provinces/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("provinces/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("provinces/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("provinces/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("provinces/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("provinces/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("provinces/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("provinces/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("provinces/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('provinces.cities', ApiNestedResourcesController::class);

    // API: CITIES RESOURCES
    Route::get("cities", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("cities", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("cities/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("cities/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("cities/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("cities/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("cities/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("cities/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("cities/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("cities/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("cities/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('cities.districts', ApiNestedResourcesController::class);

    // API: DISTRICTS RESOURCES
    Route::get("districts", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("districts", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("districts/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("districts/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("districts/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("districts/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("districts/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("districts/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("districts/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("districts/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("districts/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

    Route::resource('districts.subdistricts', ApiNestedResourcesController::class);

    // API: SUBDISTRICTS RESOURCES
    Route::get("subdistricts", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("subdistricts", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("subdistricts/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("subdistricts/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("subdistricts/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("subdistricts/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("subdistricts/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("subdistricts/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("subdistricts/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("subdistricts/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("subdistricts/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID


    // API: POSTALCODE RESOURCES
    Route::get("postalcode", [ApiCountriesResourcesController::class, 'index']); // get entire collection
    Route::post("postalcode", [ApiCountriesResourcesController::class, 'store']); // create new collection

    Route::get("postalcode/trash", [ApiCountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("postalcode/import", [ApiCountriesResourcesController::class, 'import']); // import collection from external
    Route::post("postalcode/export", [ApiCountriesResourcesController::class, 'export']); // export entire collection
    Route::get("postalcode/report", [ApiCountriesResourcesController::class, 'report']); // report collection

    Route::get("postalcode/{id}/trashed", [ApiCountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("postalcode/{id}/restore", [ApiCountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}/delete", [ApiCountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9]+'); // hard delete collection by ID

    Route::get("postalcode/{id}", [ApiCountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9]+'); // get collection by ID
    Route::put("postalcode/{id}", [ApiCountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9]+'); // update collection by ID
    Route::patch("postalcode/{id}", [ApiCountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}", [ApiCountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9]+'); // soft delete a collection by ID

});
