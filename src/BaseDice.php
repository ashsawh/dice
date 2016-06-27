<?php

use Lib\Contracts\DiceInterface;

abstract class BaseDice implements DiceInterface 
{
	const SIDES = 6;

	public function roll() 
	{
		return rand(1, self::SIDES);
	}
}
