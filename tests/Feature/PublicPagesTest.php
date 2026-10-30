<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_unknown_page_shows_404(): void
    {
        $this->get('/this-page-does-not-exist')->assertNotFound();
    }
}
