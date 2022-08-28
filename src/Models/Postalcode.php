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

class Postalcode extends Resources {

    use Uuids;
    use ObservableModel;

    protected $table = 'postalcode';
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
        'postal_code',
        'subdistrict_id',
        'district_id',
        'city_id',
        'province_id',
        'country_id',
    ];

    protected $rules = array(
        "postal_code" => 'required|string',
        'district_id' => 'required|string',
        'subdistrict_id' => 'required|string',
        'district_id' => 'required|string',
        'city_id' => 'required|string',
        'province_id' => 'required|string',
        'country_id' => 'required|string',
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

    protected $searchable = array('postal_code', 'subdistrict_id', 'district_id', 'city_id', 'province_id', 'country_id');
    protected $fillable = array('postal_code', 'subdistrict_id', 'district_id', 'city_id', 'province_id', 'country_id');
    protected $casts = [
        'district' => 'array',
        'subdistrict' => 'array',
        'district' => 'array',
        'city' => 'array',
        'province' => 'array',
        'country' => 'array',
    ];

    public function subdistrict() {
        return $this->belongsTo('SaltCountries\Models\Subdistricts', 'subdistrict_id', 'id')->withTrashed();
    }

    public function district() {
        return $this->belongsTo('SaltCountries\Models\Districts', 'district_id', 'id')->withTrashed();
    }

    public function city() {
        return $this->belongsTo('SaltCountries\Models\Cities', 'city_id', 'id')->withTrashed();
    }

    public function province() {
        return $this->belongsTo('SaltCountries\Models\Provinces', 'province_id', 'id')->withTrashed();
    }

    public function country() {
        return $this->belongsTo('SaltCountries\Models\Countries', 'country_id', 'id')->withTrashed();
    }

}
