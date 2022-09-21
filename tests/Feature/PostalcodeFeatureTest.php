<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class PostalcodeFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/postalcode';
    protected $postData = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'subdistrict_id' => '415ae2f6-04b7-11ed-8fe4-0242ac1e0003',
        'postal_code' => '12453',
    ];

    protected $putDataInvalid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'subdistrict_id' => '415ae2f6-04b7-11ed-8fe4-0242ac1e0003',
        'postal_code' => 123123,
    ];

    protected $putDataValid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'district_id' => 'ea1f7e59-04b6-11ed-8fe4-0242ac1e0003',
        'subdistrict_id' => '415ae2f6-04b7-11ed-8fe4-0242ac1e0003',
        'postal_code' => '12455',
    ];

    use ResourceFeatureTestCase;
}
