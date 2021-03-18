<?php

// Создайте многомерный массив $result — с двумя ключами ‘authors’ и ‘books’:
// в индекс (ключ) ‘authors’ добавьте многомерный массив каждый элемент которого является автором, т.е. ассоциативным массивом данных об авторе: фио, email
// в индекс (ключ) ‘books’ добавьте многомерный массив каждый элемент которого является книгой, т.е. ассоциативным массивом данных о книге: название и email автора
// Создайте несколько авторов и несколько книг;
// Выведите массив.
// Ключами для каждого из авторов сделайте их email — чтобы на основе email автора у книги можно было получить автора. И теперь добавьте каждому автору еще и год рождения.
// Выведите информацию по всем книгам, в формате:
// “Книга <Название книги>, ее написал <Фио автора> <Год Рождения автора> (<email автора>)”
// Затем перемешайте (Найдите подходящую функцию) книги и снова выведите информацию по книгам.

$result = [
    "authors" => [
        "gunAS@tsarskoeselo.press" => [
            "bio" => [
                "Pushkin Alexander Sergeevich", 
                1799,
                "gunAS@tsarskoeselo.press"
            ]
        ],
        "lion_king1828@mail.ru" => [
            "bio" => [
                "Tolstoy Lev Nikolaevich",
                1828,
                "lion_king1828@mail.ru"
            ]
            ],
        "emailius@jkrowling.com" => [
            "bio" => [
                "Joanne Rowling",
                1965,
                "emailius@jkrowling.com"
            ]
        ]
    ],

    "books" => [
        "book1" => [
            "props" => [
                "Eugene Onegin",
                "gunAS@tsarskoeselo.press"
            ]
        ],
        "book2" => [
            "props" => [
                "War&Peace",
                "lion_king1828@mail.ru"
            ]
        ],
        "book3" => [
            "props" => [
                "Harry Potter and the Philosopher's (Sorcerer's) Stone",
                "emailius@jkrowling.com"
            ]
        ]
    ]
];

foreach ($array["books"] as $book => $value) {
    $book = $value["props"][0];
    $email = $value["props"][1];
    $author = $array["authors"][$email]["bio"][0];
    $authorsBirthDate = $array["authors"][$email]["bio"][1];
    echo "<p> Книга $book, ее написал $author $authorsBirthDate ($email)<br /></p>";
}


shuffle($result["books"]);

foreach ($result["books"] as $book => $value) {
    $book = $value["name"][0];
    $email = $value["name"][1];
    $author = $result["authors"][$email]["bio"][0];
    $authorsBirthDate = $result["authors"][$email]["bio"][1];

    echo "Книга $book, ее написал $author $authorsBirthDate ($email)<br />";
}