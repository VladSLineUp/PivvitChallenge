<?php

namespace Tests\Feature;

use Tests\TestCase;

class OfferingTest extends TestCase
{
    public function testBasicExample()
    {
        $this->json('POST', '/offerings')
            ->seeJson([
                'price',
                'title'
            ]);
    }
}
