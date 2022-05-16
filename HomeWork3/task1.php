<?php
$table1 = [2, 3, 5, 7, 9, 1, 3, 8, 4, 9];
$table2 = [7, 3, 4, 2, 5, 21, 2, 9, 2, 0];
    foreach($table1 as $tab1) {
        foreach ($table2 as $tab2) {
            $a = array_shift($table1);
            $b = array_shift($table2);
            $sum[] = $a * $b;
        }
    }
print_r($sum);