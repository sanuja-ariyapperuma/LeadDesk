<?php

require_once 'vendor/autoload.php';

use \App\MaxSubArray\Solution as Sol;
use \App\Anagram\Solution as Sol2;

$sol = new Sol();
$val = $sol->contiguous([-1, 1, 5, -6, 3]);
echo $val;

echo "\n";

$sol2 = new Sol2();
echo "is anagram : " . var_dump($sol2->isAnagram("CAR","RAc"));



