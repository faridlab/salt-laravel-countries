<?php

namespace SaltCountries\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;
use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class Subdistricts extends Resources {

    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        // 'limit',
        // 'page',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'name',
        'district_id',
        'country_id',
        'province_id',
        'city_id',
        'latitude',
        'longitude'
    ];

    protected $rules = array(
        "name" => 'required|string',
        "country_id" => 'required|string',
        "province_id" => 'required|string',
        "city_id" => 'required|string',
        "district_id" => 'required|string',
        "latitude" => 'nullable|numeric',
        "longitude" => 'nullable|numeric',
    );

    protected $auths = array (
        // 'index',
        'store',
        // 'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $forms = array();
    protected $structures = array();

    protected $searchable = array('name', 'district_id', 'country_id', 'province_id', 'city_id', 'latitude', 'longitude');
    protected $fillable = array('name', 'district_id', 'country_id', 'province_id', 'city_id', 'latitude', 'longitude');
    protected $casts = [
        'district' => 'array',
    ];

    public function country() {
        return $this->belongsTo('SaltCountries\Models\Countries', 'country_id', 'id')->withTrashed();
    }

    public function province() {
        return $this->belongsTo('SaltCountries\Models\Provinces', 'province_id', 'id')->withTrashed();
    }

    public function city() {
        return $this->belongsTo('SaltCountries\Models\Cities', 'city_id', 'id')->withTrashed();
    }

    public function district() {
        return $this->belongsTo('SaltCountries\Models\Districts', 'district_id', 'id')->withTrashed();
    }

}
