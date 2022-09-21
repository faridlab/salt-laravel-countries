<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\ResourceFeatureTestCase;

class CountriesFeatureTest extends TestCase
{
    protected $endpoint = '/api/v1/countries';
    protected $postData = [
        'name' => 'Test Country',
        'isocode' => 'TS',
        'phonecode' => '100'
    ];

    protected $putDataInvalid = [
        'name' => '[UPDATED] Test Country',
        'isocode' => 'TST',
    ];

    protected $putDataValid = [
        'name' => '[UPDATED] Test Country',
        'isocode' => 'TS',
        'phonecode' => '100'
    ];

    use ResourceFeatureTestCase;
}
