<?php


//
/*
$variable = 1;


echo $variable;
echo "<br>";
echo PHP_EOL;
echo gettype($variable);

echo PHP_EOL;
$string = "hello";
echo $string;
echo PHP_EOL;
echo gettype($string);

echo PHP_EOL;
$boolean = true;
var_dump ($boolean);

echo PHP_EOL;
$boolean = false;
var_dump ($boolean);

echo PHP_EOL;
$float = 1.7;
var_dump($float);
echo gettype($float);
echo PHP_EOL;
echo (int)((0.7 + 0.1) * 10);



echo PHP_EOL;
$null = null;
var_dump($null);
*/
/*
$myVariable - ok

$MyVariable
$my_var 

$1var - not ok

$_var
*/
/*
$a = 10;
$b = 20;

///////////// Your code
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
///////////////////

//$a = -1 * $a;
//$a *= -1;
$a = 10;

$a = 2;
$b = 25;

echo $b ** $a;
*/

// https://www.php.net/manual/en/ref.math.php
// https://www.php.net/manual/en/math.constants.php
//echo M_PI;

//$var = "false";
//var_dump((bool)$var);

//echo "hello" . " " . "world";
/*
if (true) {
    //req
} elseif(true) {
    //not req
} else {
    //not req
}
*/
/*
$a = "qwerty";
$b = false;

if ( gettype($a) === gettype($b) && $a > $b) {
    echo "TRUE";
} else {
    echo "FALSE";
}
*/
/*

$array = array(
    'Jonh',
    'Mary',
    'David',
);

$array = [
    'Jonh',
    'Mary',
    'David',
];

$array = [];

$array = [
    'Russia' => 'Moscow',
    'China' => 'Beigin',
    'Belorussia' => 'Minsk',
];
/*
foreach ($array as $key => $value) {
//    echo 'Country ' . $key . ' Capital ' . $value . '<br>';
    echo "Country $key Capital $value<br>";
}
*/
/*
foreach ($array as $value) {
    echo "Capital $value<br>";
}

foreach ($array as $value) {
    $value .= '!!';
}
unset($value);   
foreach ($array as $value) {
    echo "Capital $value<br>";
}   */ 

/*
foreach ($array as $key => $value) {
    $array[$key] .= '!!';
}
 
foreach ($array as $value) {
    echo "Capital $value<br>";
}
*/

/*
$array = [
    'Russia' => ['Moscow', 'Piter', 'Tula'],
    'China' => ['Beigin', 'Shanhay'],
    'Belorussia' => ['Minsk', 'Brest'],
];

//array_push($array['Russia'], 'Tver');
// array_unshift($array['Russia'], 'Tver');
/*$array['Russia'][] = 'Tver';

foreach ($array as $capital => $cities) {
    echo "Country $capital <br><ul>";
    foreach ($cities as $city) {
        echo "<li>City $city</li>";
    }
    echo '</ul>';
}*/


/*
$array = [
    'Russia' => ['capital' => 'Moscow', 'citizen'=> 140000],
    'China' => ['capital' => 'Beigin', 'citizen'=> 1400000],
    'Belorussia' => ['capital' => 'Minsk', 'citizen'=> 10000],
];

foreach ($array as $key => list('capital' => $capital, 'citizen'=> $citizen)) {
 //   var_dump($key);
 //   var_dump($capital);
 //   var_dump($citizen);
}


$array = [
    'Russia' => ['Moscow', 140000],
    'China' => ['Beigin', 1400000],
    'Belorussia' => ['Minsk',10000],
];

foreach ($array as $key => list($capital, $citizen)) {
    var_dump($key);
    var_dump($capital);
    var_dump($citizen);
}


/*
$a = 10;
$b = 20;

print_r([$a, $b]);

list($a, $b) = [$b, $a]; 

print_r([$a, $b]);

/*
switch ($variable) {
    case 'value':
        
        break;
    default:
        break;
}
*/
/*
$a = [];

for($i = 0; $i < 10; $i++) {
    $a[] = rand();
}

print_r($a);

//usort($a, function($a, $b) { return $a <=> $b;});

//usort($a, function($a, $b) { return $a < $b ? -1 : ($a == $b ? 0 : 1);});

print_r($a);

*/
/*
function nameFunction ($a, $b) {

}

function nameFunction1 (int $a, int $b): int {
    
    return 1;
}

function nameFunction2 (int $a = 0, int $b = 0): int {
    
    return 1;
}

$func = function (int $a = 0, int $b = 0) {
    echo $a, $b;

    return 1;
};

$func(1, 2);

*/

/*

$var = '20';
$return = '';
switch ($var) {
    case "val1" :
        $return = 'foo_for_var1';
        break;
    case "val2":
        $return = 'foo_for_var2';
        break;
    case "val3":
        $return = 'foo_for_var3';
        break;
    default:
        $return = 'default';        
        break;
}
echo $return;

try {
    $return = match ($var) {
        "val1" => 'foo_for_var1',
        "val2" => 'foo_for_var2',
        "val3" => 'foo_for_var3',
        20 => '20',
        //default => 'default',
    };
} catch (Throwable $e) {
    echo "Exeption";
}

echo PHP_EOL;
echo $return;

*/
/*
$micro = microtime(true);

for ($i = 0; $i < 50000; $i++) {    
    $return = '';
    switch (true) {
        case $i < 10000 :
            $return = 'foo_for_var1';
            break;
        case $i < 20000 :
            $return = 'foo_for_var2';
            break;
        case $i < 30000 :
            $return = 'foo_for_var3';
            break;
    }
}

echo PHP_EOL;
echo  microtime(true) - $micro;


$micro = microtime(true);

for ($i = 0; $i < 50000; $i++) {    
    
    try {
        $return = match (true) {
           $i < 10000 => 'foo_for_var1',
           $i < 20000 => 'foo_for_var2',
           $i < 30000 => 'foo_for_var3',
        };
    } catch (Throwable $e) {
        //echo "Exeption";
    }
}

echo PHP_EOL;
echo  microtime(true) - $micro;


include('../src/Main.php');

$main = new Main();

$main->public = [1, 2];
$main->public = 10;
var_dump($main->public);

var_dump(Main::$ps);

var_dump($main->func());
$int = 5;

list($int, $var) = Main::statFunc($int);

print_r($int);

echo $int;$main = new Main();

$main->public = [1, 2];
$main->public = 10;
var_dump($main->public);

var_dump(Main::$ps);

var_dump($main->func());
$int = 5;

list($int, $var) = Main::statFunc($int);

print_r($int);

echo $int;
*/

include('../src/Main.php');

$main = new Main();

$main->Main();