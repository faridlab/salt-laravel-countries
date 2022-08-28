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

class Districts extends Resources {

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
        'city_id',
    ];

    protected $rules = array(
        "name" => 'required|string',
        "city_id" => 'required|string',
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

    protected $searchable = array('name', 'city_id');
    protected $fillable = array('name', 'city_id');
    protected $casts = [
        'city' => 'array',
    ];

    public function city() {
        return $this->belongsTo('SaltCountries\Models\Cities', 'city_id', 'id')->withTrashed();
    }

}
