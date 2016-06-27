<?php
use PHPUnit\Framework\TestCase;

class OrdersTest extends TestCase
{
    public function testGetTotal() 
    {
	$dice = new D6();
	$face = (new MyDice())
	    ->attach($dice)
	    ->getTotal();
	$this->assertContains($face, [1, 2, 3, 4, 5, 6]);
    }
}
