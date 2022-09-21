<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class SubdistrictsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/subdistricts';
    protected $postData = [
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'name' => 'Test Subdistrict',
    ];

    protected $putDataInvalid = [
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'name' => 123123,
    ];

    protected $putDataValid = [
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'name' => '[UPDATED] Test Subdistrict',
    ];

    use ResourceFeatureTestCase;
}
