<?php

use Lib\Contracts\DiceInterface;

class AnyDie implements DiceInterface 
{
	private $faces;
	private $sides;

	function __construct(Array $faces) 
	{
		$this->faces = $faces;
		$this->sides = count($faces);
	}

	public function roll() 
	{
		$side = $this->getSide();
		return $this->faces[$side];
	}

	private function getSide() {
		return rand(0, --$this->sides);
	} 
}
