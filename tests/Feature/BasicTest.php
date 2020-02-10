<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Box;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testHasItemInBox()
    {
        $box = new Box(['item_one','item_two','item_three']);

        // this assertions is to test boolean (true or false) using assertTrue() and assertFalse()
        $this->assertTrue($box->has('item_one'));
        $this->assertFalse($box->has('item_four'));
        $this->assertTrue($box->has('item_two'));
    }

    public function testTakeOneFromTheBox()
    {
        $box = new Box(['item_three']);

        $this->assertEquals('item_three', $box->takeOne());

        $this->assertNull($box->takeOne());
    }

    public function testEqualAfterPush()
    {
        $box = new Box([]);
        $this->assertEquals('item_one',$box->pushOne('item_one'));
        // dd($box->pushOne('item_one'));
    }

    public function testCountItemInTheBox()
    {
        $box = new Box(['one','two','three']);
        // dd($box->totalItem());
        $expectedCount = 3; 
        $this->assertCount($expectedCount, $box->totalItem(),"total item doesnt count 3");
    }

    public function testEmptyOnArray()
    {
        $array = array();

        $this->assertEmpty($array);
    }

    public function testContainsOfArray()
    {
        $array = array('abcdefg');

        //when we used assertContains, first param must be complete request
        $this->assertContains('abcdefg',$array);
    }
}
