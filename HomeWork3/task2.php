<?php
$phraseArr1 = [
    'счастья, здоровья и всего нанаилучшего!',
    'бесконечного здоровья и безудержного воображения!',
    'самого самого лучшего здоровья!'
];
$phraseArr2 = [
    'космического терпения,',
    'много денег,',
    'чтоб не кашлял,'
];
$userName = readline('Введите ваше имя: ');

$phraseStr1 = implode($phraseArr1);
$phraseStr2 = implode($phraseArr2);

$phraseRand = array_rand($phraseArr1);
$phrase1 = $phraseArr1[$phraseRand];

$phraseRand = array_rand($phraseArr2);
$phrase2 = $phraseArr2[$phraseRand];

echo "Дорогой $userName, от всего сердца поздравляю тебя с днем рождения, желаю $phrase2 и $phrase1";
