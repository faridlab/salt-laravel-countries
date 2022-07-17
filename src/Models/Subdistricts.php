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
    ];

    protected $rules = array(
        "name" => 'required|string',
        "district_id" => 'required|integer',
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

    protected $searchable = array('name', 'district_id');
    protected $fillable = array('name', 'district_id');
    protected $casts = [
        'district' => 'array',
    ];

    public function district() {
        return $this->belongsTo('SaltCountries\Models\Districts', 'district_id', 'id')->withTrashed();
    }

}
