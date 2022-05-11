<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Arrow Function Problem
 */
class Arrow_Function
{
    /**
     * Function to add two numbers
     * Passing 'x' as a parameter
     * Returns a Function
     */
    function addition($x)
    {
        return fn ($y) => ($x + $y);
    }
}
$x = readline('Enter X Value: ');
$y = readline('Enter Y Value: ');

$arrowFunction = new Arrow_Function();
$add = $arrowFunction->addition($x);
echo "Addition: " . $add($y);
?>