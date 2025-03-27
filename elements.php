<?php

// массив из 100 случайных числе
$array = [];
for ($i = 0; $i < 100; $i++) {
    $array[] = rand(-50, 50); // рандомная генерация числе от -50 до 50
}

 // функция для вычисления последовательных пар случайных элементов
function countConsecutivePairs($arr) {
    $count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] === $arr[$i + 1]) {
            $count++;
        }
    }
    return $count;
}

// подсчет
$result = countConsecutivePairs($array);

// вывод
echo "Массив: " . implode(", ", $array) . "\n";
echo "Количество последовательных пар одинаковых элементов: " . $result . "\n";

