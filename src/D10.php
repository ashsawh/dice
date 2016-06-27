<?php

use Lib\Contracts\DiceInterface;

class D10 extends BaseDice implements DiceInterface
{
        const SIDES = 10;

        public function roll()
        {
                return rand(1, self::SIDES);
        }
}
