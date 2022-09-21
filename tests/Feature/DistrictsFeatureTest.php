<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class DistrictsFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/districts';
    protected $postData = [
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'name' => 'Test District',
    ];

    protected $putDataInvalid = [
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'name' => 123123,
    ];

    protected $putDataValid = [
        'city_id' => '2d080d3f-04b5-11ed-8fe4-0242ac1e0003',
        'name' => '[UPDATED] Test District',
    ];

    use ResourceFeatureTestCase;
}
