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

$primeOrNot = IsAPrimeNum(15);

if ($primeOrNot == 1)
    print ("The number is a prime number.");
else if ($primeOrNot == 2)
    print ("1 is neither prime nor composite.");
else
    print ("The number is not a prime number.");   
?>