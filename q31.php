<?php
        $n = 153; $s = 0; $t = $n;
        while ($t) { $s += ($t % 10) ** strlen($n); $t = (int)($t / 10); }
        echo $s == $n ? "Armstrong" : "Not Armstrong";
        echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>