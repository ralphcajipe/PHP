<?php
// Exercise
// Determine what indices of arrays will produce an output “Small Green Cabinet”

$furniture = array (
    array("Desk","Red","Small"),
    array("Cabinet","Blue","Medium"),
    array("Chair","Green","Large"),
    array("Sofa","Yellow","Extra Large")
);
echo $furniture [0][2] . " " . $furniture [2][1] . " " . $furniture [1][0] . "\n";
