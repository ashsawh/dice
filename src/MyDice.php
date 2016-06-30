<?php

use Lib\Contracts\DiceContainerInterface;
use Lib\Contracts\DiceInterface;

/**
* Dice container that attaches a die and in the process rolls it
*
*/
class MyDice implements DiceContainerInterface 
{
	private $dice;

	/**
	* Attaches a dice to container after rolling to get it's result
	* @param $die Object Die that confirms to DiceInterface
	* @return Object Returns self
	*/
	public function attach(DiceInterface $die) {
		$diceSet = [
			'die'		=> $die,
			'result'	=> $die->roll()
		];

		$this->dice[] = $diceSet;
		return $this;
	}

	/**
	* Get total of all dice by walking through inventory's result
	* @return int
	*/
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

	/**
	* Assert that a die has been loaded to perform operations
	*
	*/
	public function hasDice() 
	{
		if(empty($this->dice)) 
		{
			throw new \Exception("No die has been loaded.");
		}
	}
}

