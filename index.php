<?php

require __DIR__ . '/vendor/autoload.php';

// You may modify this file as necessary to handle your dependencies

// Implement all of the classes that allow you to write the following code:

$container = new MyDice();
$container->attach(new D10()); // 10-sided die
$container->attach(new D8()); // 8-sided die
$container->attach(new D6()); // 6-sided die
$container->attach(new D4()); // 4-sided die
$container->attach(new AnyDie([0, 0, 1, 2, 3, 3])); // A die with arbitrary faces
$total = $container->getTotal();

echo "Total of all dice: $total\n";

