<?php
require 'RestaurantCheck.php';
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class RestaurantCheckTest extends TestCase
{
    public function testWithTaxAndTip()
    {
        $meal = 100;
        $tax = 10;
        $tip = 20;
        $result = restaurant_check($meal, $tax, $tip);
        $this->assertEquals(130, $result);
    }
    
    public function testWithNoTip()
    {
        $meal = 100;
        $tax = 10;
        $tip = 0;
        $result = restaurant_check($meal, $tax, $tip);
        $this->assertEquals(110, $result);
    }
}