<?php
$students = [
    'БАП1320' => [
        'Смирнова Христина Потаповна' => 5,
        'Рогозин Даниил Арсениевич' => 4,
        'Золин Владилен Леонтиевич' => 2,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 5,
        'Саврасова Фаина Ивановна' => 5,
        'Хромченко Зинаида Николаевна' => 5,
        'Протасова Майя Леонидовна' => 5
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 3,
        'Белорусов Ефрем Изяславович' => 4,
        'Ягода Назар Прохорович' => 2,
        'Ярилова Розалия Серафимовна' => 3,
        'Нырко Платон Вадимович' => 3,
        'Калинин Агап Моисеевич' => 2,
        'Никифоров Юлиан Прокофиевич' => 3
    ]
];
sort($students);

$badMarkStudents = [];
foreach ($students as $group) {
    foreach ($group as $nameStudent => $mark) {
        if ($mark < 3) {
            $badMarkStudents[] = $nameStudent;
        }
    }
}
 print_r($badMarkStudents);