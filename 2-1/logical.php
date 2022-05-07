<?php
// Using the ternary operator to evaluate the logic of expressions

$a1 = 5;
$a2 = 7;
$b1 = 14;
$b2 = 3;

$and = $a1 < $a2 && $b1 > $b2 ? "True":"False";
echo "AND Expression: " .$and ."\n";

$or = $a1 < $a2 || $b1 < $b2 ? "True":"False";
echo "OR Expression: " .$or ."\n";

$not = !($a1 < $a2) ? "True":"False";
echo "NOT Expression: " .$not ."\n";

?>