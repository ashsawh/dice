<?php

namespace Lib\Contracts;

interface DiceContainerInterface
{
	public function attach(DiceInterface $die);
	public function getTotal();
}
