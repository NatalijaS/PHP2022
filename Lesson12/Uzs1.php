<?php
/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/

$str = 'A car is standing in a parkinglot.';

$res = preg_replace('=\s\S+$=', '', $str);

var_dump($res);

?>