<?php

// Задание 2 - Перестановка букв в слове (циклический сдвиг влево)
// Дано слово (поместите любой текст в переменную word), нужно взять первую букву в слове и поставить ее в конец.
$word = 'Welcome';

$word = substr($word, 1, strlen($word) - 1) . substr($word, 0, 1);

var_dump($word);