<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class ProvincesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/provinces';
    protected $postData = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'name' => 'Test Province',
    ];

    protected $putDataInvalid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'name' => 123123,
    ];

    protected $putDataValid = [
        'country_id' => '7ce4541d-04af-11ed-8fe4-0242ac1e0003',
        'name' => '[UPDATED] Test Province',
    ];

    use ResourceFeatureTestCase;
}
