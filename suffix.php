<?php
// Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.

// Создайте программу, которая выведет в нужной форме текстовое сообщение, например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.

$studentsCount = rand(10, 15);

function howMuchStudentsNow ($count)
{
    $lastInt = $count % 100;
    if ($lastInt === 11 || $lastInt === 12 || $lastInt === 13 || $lastInt === 14) {
        $suffix = 'ов';
    } else {
        if ($lastInt % 10 === 1) {
            $suffix = '';
        } elseif ($lastInt % 10 > 1 && $lastInt % 10 < 5) {
            $suffix = 'а';
        } else $suffix = 'ов';
    }

    echo "на учебе $count студент$suffix";
}

howMuchStudentsNow ($studentsCount);