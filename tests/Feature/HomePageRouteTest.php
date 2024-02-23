<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageRouteTest extends TestCase
{
    /**
     * Check whether home page route is present
     *
     * @return void
     */
    public function test_home_page_route_available(): void
    {
        $response = $this->get('/#/');

        $response->assertStatus(200);
    }
}
