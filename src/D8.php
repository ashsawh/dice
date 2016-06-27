<?php

use Lib\Contracts\DiceInterface;

class D8 extends BaseDice implements DiceInterface
{
        const SIDES = 8;

        public function roll()
        {
                return rand(1, self::SIDES);
        }
}
