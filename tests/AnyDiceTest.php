<?php
use PHPUnit\Framework\TestCase;

class AnyDiceTest extends TestCase
{
    public function testRoll()
    {
        $face = (new AnyDie([5, 5, 5, 5]))->roll();
        $this->assertEquals($face, 5);
    }
}
