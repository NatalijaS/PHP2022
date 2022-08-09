<?php
/*
  1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
   Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
   100
   102
   103
   ...
 */

for ($i = 100; $i <= 500; $i++) {
    if ($i % 2 === 0) {
        echo "$i\n";
        echo ' ';
    }
}
?>