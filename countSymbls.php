<?php

// Задание 1 - Подсчет различных букв в слове
// Дано слово или предложение (поместите любой текст в переменную line), необходимо подсчитать сколько раз в нем встречается каждый различный символ (большие и маленькие буквы считать за разные символы).
// например: "Student, hello!"
// S - 1
// t - 2
// u - 1
// d - 1
// e - 2
// n - 1
// , - 1
//   - 1
// h - 1
// l - 2
// o - 1
// ! - 1
$line = 'Student, hello!';

$result = [];
foreach (str_split($line) as $letter) {
    $result[$letter] = ($result[$letter] ?? 0) + 1;
}

foreach ($result as $letter => $count) {
    echo $letter . ' - ' . $count . PHP_EOL;
}
