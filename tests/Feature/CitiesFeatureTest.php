<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class CitiesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/cities';
    protected $postData = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'name' => 'Test City',
    ];

    protected $putDataInvalid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'name' => 123123,
    ];

    protected $putDataValid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'province_id' => '100d80d5-04b6-11ed-8fe4-0242ac1e0003',
        'name' => '[UPDATED] Test City',
    ];

    use ResourceFeatureTestCase;
}
