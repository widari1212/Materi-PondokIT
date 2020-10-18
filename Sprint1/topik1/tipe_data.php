<?php
$a = true;
$b = false;
$c = 4.5;
$d = 3;
$e = '2';
$f = 2;
$g = null;
var_dump($a);
var_dump($b);
var_dump((bool)$b);
var_dump($c);
var_dump((int)$c);
var_dump($d + $e);
var_dump($d . $e);
var_dump($c * $e);
var_dump($d > $e);
var_dump($e == $f);
var_dump($e === $f);
var_dump($g);
var_dump((bool)$g);
var_dump((int)$g);
var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(false || false);
var_dump(!false);
?>