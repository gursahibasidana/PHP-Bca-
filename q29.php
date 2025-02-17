<?php
    $a = 36;
    $b = 60;
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    echo "HCF is " . $a;
    echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>