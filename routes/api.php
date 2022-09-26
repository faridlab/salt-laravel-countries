<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use SaltCountries\Controllers\ApiNestedResourcesController;

use SaltCountries\Controllers\CountriesResourcesController;
use SaltCountries\Controllers\ProvincesResourcesController;
use SaltCountries\Controllers\CitiesResourcesController;
use SaltCountries\Controllers\DistrictsResourcesController;
use SaltCountries\Controllers\SubdistrictsResourcesController;
use SaltCountries\Controllers\PostalcodeResourcesController;

$version = config('app.API_VERSION', 'v1');

Route::middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: COUNTRIES RESOURCES
    Route::get("countries", [CountriesResourcesController::class, 'index']); // get entire collection
    Route::post("countries", [CountriesResourcesController::class, 'store']); // create new collection

    Route::get("countries/trash", [CountriesResourcesController::class, 'trash']); // trash of collection

    Route::post("countries/import", [CountriesResourcesController::class, 'import']); // import collection from external
    Route::post("countries/export", [CountriesResourcesController::class, 'export']); // export entire collection
    Route::get("countries/report", [CountriesResourcesController::class, 'report']); // report collection

    Route::get("countries/{id}/trashed", [CountriesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("countries/{id}/restore", [CountriesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}/delete", [CountriesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("countries/{id}", [CountriesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("countries/{id}", [CountriesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("countries/{id}", [CountriesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("countries/{id}", [CountriesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('countries.provinces', ApiNestedResourcesController::class);

    // API: PROVINCES RESOURCES
    Route::get("provinces", [ProvincesResourcesController::class, 'index']); // get entire collection
    Route::post("provinces", [ProvincesResourcesController::class, 'store']); // create new collection

    Route::get("provinces/trash", [ProvincesResourcesController::class, 'trash']); // trash of collection

    Route::post("provinces/import", [ProvincesResourcesController::class, 'import']); // import collection from external
    Route::post("provinces/export", [ProvincesResourcesController::class, 'export']); // export entire collection
    Route::get("provinces/report", [ProvincesResourcesController::class, 'report']); // report collection

    Route::get("provinces/{id}/trashed", [ProvincesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("provinces/{id}/restore", [ProvincesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}/delete", [ProvincesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("provinces/{id}", [ProvincesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("provinces/{id}", [ProvincesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("provinces/{id}", [ProvincesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("provinces/{id}", [ProvincesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('provinces.cities', ApiNestedResourcesController::class);

    // API: CITIES RESOURCES
    Route::get("cities", [CitiesResourcesController::class, 'index']); // get entire collection
    Route::post("cities", [CitiesResourcesController::class, 'store']); // create new collection

    Route::get("cities/trash", [CitiesResourcesController::class, 'trash']); // trash of collection

    Route::post("cities/import", [CitiesResourcesController::class, 'import']); // import collection from external
    Route::post("cities/export", [CitiesResourcesController::class, 'export']); // export entire collection
    Route::get("cities/report", [CitiesResourcesController::class, 'report']); // report collection

    Route::get("cities/{id}/trashed", [CitiesResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("cities/{id}/restore", [CitiesResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}/delete", [CitiesResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("cities/{id}", [CitiesResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("cities/{id}", [CitiesResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("cities/{id}", [CitiesResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("cities/{id}", [CitiesResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('cities.districts', ApiNestedResourcesController::class);

    // API: DISTRICTS RESOURCES
    Route::get("districts", [DistrictsResourcesController::class, 'index']); // get entire collection
    Route::post("districts", [DistrictsResourcesController::class, 'store']); // create new collection

    Route::get("districts/trash", [DistrictsResourcesController::class, 'trash']); // trash of collection

    Route::post("districts/import", [DistrictsResourcesController::class, 'import']); // import collection from external
    Route::post("districts/export", [DistrictsResourcesController::class, 'export']); // export entire collection
    Route::get("districts/report", [DistrictsResourcesController::class, 'report']); // report collection

    Route::get("districts/{id}/trashed", [DistrictsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("districts/{id}/restore", [DistrictsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}/delete", [DistrictsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("districts/{id}", [DistrictsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("districts/{id}", [DistrictsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("districts/{id}", [DistrictsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("districts/{id}", [DistrictsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

    Route::resource('districts.subdistricts', ApiNestedResourcesController::class);

    // API: SUBDISTRICTS RESOURCES
    Route::get("subdistricts", [SubdistrictsResourcesController::class, 'index']); // get entire collection
    Route::post("subdistricts", [SubdistrictsResourcesController::class, 'store']); // create new collection

    Route::get("subdistricts/trash", [SubdistrictsResourcesController::class, 'trash']); // trash of collection

    Route::post("subdistricts/import", [SubdistrictsResourcesController::class, 'import']); // import collection from external
    Route::post("subdistricts/export", [SubdistrictsResourcesController::class, 'export']); // export entire collection
    Route::get("subdistricts/report", [SubdistrictsResourcesController::class, 'report']); // report collection

    Route::get("subdistricts/{id}/trashed", [SubdistrictsResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("subdistricts/{id}/restore", [SubdistrictsResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}/delete", [SubdistrictsResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("subdistricts/{id}", [SubdistrictsResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("subdistricts/{id}", [SubdistrictsResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("subdistricts/{id}", [SubdistrictsResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("subdistricts/{id}", [SubdistrictsResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: POSTALCODE RESOURCES
    Route::get("postalcode", [PostalcodeResourcesController::class, 'index']); // get entire collection
    Route::post("postalcode", [PostalcodeResourcesController::class, 'store']); // create new collection

    Route::get("postalcode/trash", [PostalcodeResourcesController::class, 'trash']); // trash of collection

    Route::post("postalcode/import", [PostalcodeResourcesController::class, 'import']); // import collection from external
    Route::post("postalcode/export", [PostalcodeResourcesController::class, 'export']); // export entire collection
    Route::get("postalcode/report", [PostalcodeResourcesController::class, 'report']); // report collection

    Route::get("postalcode/{id}/trashed", [PostalcodeResourcesController::class, 'trashed'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("postalcode/{id}/restore", [PostalcodeResourcesController::class, 'restore'])->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}/delete", [PostalcodeResourcesController::class, 'delete'])->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("postalcode/{id}", [PostalcodeResourcesController::class, 'show'])->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("postalcode/{id}", [PostalcodeResourcesController::class, 'update'])->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("postalcode/{id}", [PostalcodeResourcesController::class, 'patch'])->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("postalcode/{id}", [PostalcodeResourcesController::class, 'destroy'])->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
