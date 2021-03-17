<?php
// Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.

// Создайте программу, которая выведет в нужной форме текстовое сообщение, например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.

$studentsCount = rand(1, 1000000);

function howMuchStudentsNow ($count)
{
    $lastInt = $count % 10;
    if ($lastInt === 1) {
        $suffix = '';
    } elseif ($lastInt > 1 && $lastInt < 5) {
        $suffix = 'а';
    } else $suffix = 'ов';

    echo "на учебе $count студент$suffix";
}

howMuchStudentsNow ($studentsCount);