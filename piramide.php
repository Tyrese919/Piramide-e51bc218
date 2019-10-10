<?php

echo "Hoeveel rijen wil je hebben?" .PHP_EOL;
$getal = readline();

for ($i = 1; $i <= $getal; $i++) {
    for ($j=1; $j <= $i ; $j++) {
      echo "*";
    }
    echo "\n";
}

 ?>
