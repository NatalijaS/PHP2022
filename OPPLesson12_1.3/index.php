<?php
/*
 1.3
Sukurkite naują sesijos kintamąjį visit_history.
Jame laikomas visų aplankytų svetainės adresų sąrašas (naudokite $_SERVER['REQUEST_URI'])
Sąrašą visuomet atvaizduokite programos išvestyje.
Išbandykite programą aplankydami skirtingus adresus (/test, /test2, /news, t.t.).

Užduotis gali neveikti jeigu nesukonfigūruotas visų adresų nukreipimas į index.php failą
 */
session_start();    //privaloma sesijai pradėti
if (isset($_SESSION['visit_history'])) {
    echo 'Jūs atejot iš '.end($_SESSION['visit_history']);
}
$_SESSION['visit_history'][] = $_SERVER['REQUEST_URI'];
echo '<pre>';
print_r($_SESSION['visit_history']);

