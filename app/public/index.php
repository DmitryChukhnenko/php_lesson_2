<?php

// 1
$variable = 100;
echo ((int)sqrt($variable*0.5));
echo "<br>";

// 2
$x = 5;
$y = 4;
$z = 3;
echo (sqrt(pow($x, 2)+pow($y, 2)+pow($z, 2)));
echo "<br>";

// 3
function IsPolyndrome (string $str) : bool {
    $str = str_replace(' ', '', strtolower($str));
    $len = strlen($str)-1;
    for ($i = 0; $i <= $len; $i++) {   
        if ($str[$i] != $str[$len-$i])
            return false;
    }
    return true;
}
$strPoly = "Step not on pets";
echo IsPolyndrome($strPoly);
echo "<br>";

// 4
function MultiFunc(int $num) : Array {
    $result = [];
    for ($i = 1; $i <= 10; $i++) {   
        $result["$num * $i"] = $num*$i;
    }
    return $result;
}
$table = MultiFunc(3);
print_r($table);