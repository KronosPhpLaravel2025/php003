<?php
// $a = 10;
// $b = 5;
// $c = 3;
// $d = 6;
// $e = 3;
// $f = 1;
// $g = 6;
// $h = 33;
// $i = 1;


// function sum($x, $y, $z = 0)
// {
//     echo 'La somma totale dei numeri è ' . $somma = $x + $y + $z . "\n";
// }


// sum($a, $b);
// sum($d, $e, $f);
// sum($g, $h, $i);

// $a = 10;
// $b = 5;
// $c = 3;


function sum($x, $y)
{
    return $x + $y;
}

function sub($x, $y)
{
    return $x - $y;
}


function mol($x, $y)
{
    return $x * $y;
}

function div($x, $y)
{
    return $x / $y;
}



// echo 'La somma totale dei numeri è ' . sum(sum($a, $b), $c) . "\n";


$numeri = [5, 7, 4, 3, 2, 1];


foreach ($numeri as $numero) {
    $somma = 0;
    $somma = sum($somma, $numero);
}

echo $somma;
