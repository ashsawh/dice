<?php

use Lib\Contracts\DiceInterface;

/**
* A die that accepts an array of values and then rolls them based off rand.
* Class is separate from standard base die given the deviations. DRY is upheld.
*/
class AnyDie implements DiceInterface 
{
	private $faces;
	private $sides;

	/**
	* Accepts only an array of vface values.
	* @param $faces array Array of face values, can be an array of strings or ints.
	*/
	function __construct(Array $faces) 
	{
		try 
		{
			$this->checkSides($faces);
			$this->faces = $faces;
			$this->sides = count($faces);
		} 
		catch(Exception $e) 
		{
			echo $e->getMessage();
		}
	}

	/**
	* Randomly rolls the dice and get the face value
	* @return Int 
	*/
	public function roll() 
	{
		$side = $this->getSide();
		return $this->faces[$side];
	}

	/**
	* @return Int Randomly return the face based on number of sides
	*/
	private function getSide() 
	{
		return rand(0, --$this->sides);
	} 

	/**
	* Validation to assert array values are strings or numeric
	* @param $faces Array Faces is expected to be an array injected from the constructor 
	*/
	private function checkSides(Array $faces) 
	{
		$assertion = array_filter($faces, function($value) { 
			if(!is_numeric($value) && !is_string($value)) 
			{ 
				return true;
			}
		});
		if($assertion) 
		{
			throw new \Exception("Faces must be strings or numeric.");
		}
	}
}

