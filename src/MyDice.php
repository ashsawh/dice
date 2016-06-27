<?php

use Lib\Contracts\DiceContainerInterface;
use Lib\Contracts\DiceInterface;

class MyDice implements DiceContainerInterface 
{
	private $dice;

	public function attach(DiceInterface $die) {
		$diceSet = [
			'die'		=> $die,
			'result'	=> $die->roll()
		];

		$this->dice[] = $diceSet;
		return $this;
	}

	public function getTotal() {
		try 
		{
			$this->hasDice();
			return array_sum(array_map(function($set) {
				return $set['result'];
			}, $this->dice)); 
		} 
		catch(\Exception $e) 
		{
			echo $e->getMessage();
		}
	}

	public function hasDice() 
	{
		if(empty($this->dice)) 
		{
			throw new \Exception("No die has been loaded.");
		}
	}
}
