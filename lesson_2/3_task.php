<?php // Максимум что смог сделать
do {
    $number = (int)readline("Введите число(от 1 - 33): ");
    if ($number == 1 || 9 || 17 || 25 || 33) {
        echo "Большой палец";
    } elseif ($number == 2 || 8 || 10 || 16 || 18 || 24 || 26 || 32) {
        echo "Указательный палец";
    } elseif ($number == 3 || 7 || 11 || 15 || 19 || 23 || 27 || 31) {
        echo "Средний палец";
    } elseif ($number == 4 || 6 || 12 || 14 || 20 || 22 || 28 || 30) {
        echo "Безымянный палец ";
    } elseif ($number == 5 || 13 || 21 || 29) {
        echo "Мизинец";
    }
} while($number <= 0);









