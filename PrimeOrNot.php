<?php
function IsAPrimeNum($num)
{
    for($i=2; $i<$num; $i++)
    {
        if($num % $i == 0)
        {
            return 0;
        }
    }
    if ($num == 1)
        return 2;
    return 1;
}

$num = 15;
$primeOrNot = IsAPrimeNum($num);

if ($primeOrNot == 1)
    print ($num . " is a prime number.");
else if ($primeOrNot == 2)
    print ("1 is neither prime nor composite.");
else
    print ($num . " is not a prime number.");   
?>