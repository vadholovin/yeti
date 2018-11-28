<?php
require_once 'functions.php';

$is_auth = (bool) rand(0, 1);

// $user_name = 'Константин';
// $user_avatar = 'img/user.jpg';

// Список категорий товаров
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

// Массив лотов
$lots = [
    [
        "title" => "2014 Rossignol District Snowboard",
        "category" => "Доски и лыжи",
        "cost" => 10999,
        "image" => "lot-1.jpg"
    ],
    [
        "title" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => "Доски и лыжи",
        "cost" => 159999,
        "image" => "lot-2.jpg"
    ],
    [
        "title" => "Крепления Union Contract Pro 2015 L/XL",
        "category" => "Крепления",
        "cost" => 8000,
        "image" => "lot-3.jpg"
    ],
    [
        "title" => "Ботинки для сноуборда Charocal",
        "category" => "Ботинки",
        "cost" => 10999,
        "image" => "lot-4.jpg"
    ],
    [
        "title" => "Куртка для сноуборда Charocal",
        "category" => "Одежда",
        "cost" => 7500,
        "image" => "lot-5.jpg"
    ],
    [
        "title" => "Маска Oakley Canopy",
        "category" => "Разное",
        "cost" => 5400,
        "image" => "lot-6.jpg"
    ]
];

//  Main Page content
$page_content = include_template('templates/index.php', ['lots' => $lots]);

// Main Page layout
$layout_content = include_template('templates/layout.php', [
    'is_auth' => $is_auth,
    'title' => 'Главная',
    'user_name' => 'Константин',
    'user_avatar' => 'img/user.jpg',
    'content' => $page_content,
    'categories' => $categories
]);

print($layout_content);
