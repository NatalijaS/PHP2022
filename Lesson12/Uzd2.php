<?php

/*
 2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false

 */

$phone = '+3 ( 9 9 9 ) 9 9 9 - 9 9 - 9 9';
$phone1='+37062345678';
$phone2='+37012345678';
$phone3='+3706234567';
$phone4=+3706234567a;

if (!preg_match('/^\+3 \( [0-9] [0-9] [0-9] \) [0-9] [0-9] [0-9] - [0-9] [0-9] - [0-9] [0-9]/', $phone)) {

    echo "Tai ne numeris";

}else echo 'Numerio formatas geras';

?>