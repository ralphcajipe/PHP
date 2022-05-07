<?php
// Comparing the values of a and b printing the result.

$a = 10;
$b = 5;

$l = $a < $b ? "True":"false";
echo $a ." < " .$b ." = " .$l ."\n";

$g = $a > $b ? "True":"false";
echo $a ." > " .$b ." = " .$g ."\n";

$le = $a <= $b ? "True":"false";
echo $a ." <= " .$b ." = " .$le ."\n";

$ge = $a >= $b ? "True":"false";
echo $a ." >= " .$b ." = " .$ge ."\n";

$e = $a == $b ? "True":"false";
echo $a ." == " .$b ." = " .$e ."\n";

?>