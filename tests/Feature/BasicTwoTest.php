<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Box;

class BasicTwoTest extends TestCase
{
    public function testHasItemInBox()
    {
        $box = new Box(['item_one','item_two','item_three']);

        // this assertions is to test boolean (true or false) using assertTrue() and assertFalse()
        $this->assertTrue($box->has('item_one'));
    }
}