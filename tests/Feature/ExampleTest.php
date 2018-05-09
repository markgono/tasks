<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * Tests for homepage view
     *
     * @return void
     */
    public function testHomepage()
    {
      $homepage = $this->get('/');

      $homepage->assertSee('Tasks');
      $homepage->assertSee('Login');
    }
}
