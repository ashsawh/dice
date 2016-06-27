<?php

use Lib\Contracts\DiceInterface;

class D4 extends BaseDice implements DiceInterface
{
        const SIDES = 6;

        public function roll()
        {
                return rand(1, self::SIDES);
        }
}

