<?php

use Lib\Contracts\DiceInterface;

/**
* Base class for standard numeric dice. Sides enfoced by constant as it would never be something 
* that chages.
*/
abstract class BaseDice implements DiceInterface 
{
	const SIDES = 6;
	/**
	* Randomly roll dice based on number of sides. Assumption is face values are linear.
	* @return int 
	*/
	public function roll() 
	{
		return rand(1, self::SIDES);
	}
}

