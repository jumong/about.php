<?php
echo PHP_EOL;
$title = 'Страница Хисамутдинова Арслана';
$name = 'Арслан';
$lastName = 'Хисамутдинов';
$age = '16 лет';
$about = 'Фронтенд разработчик';
$mail = 'arslanlev1999@mail.ru';
$city = 'Ташкент';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <style type="text/css">
            div{background-color:#03b5fd; 
            padding:10px; 
            width:600px; 
            height:auto;
            margin:0px auto;}
            dl {display: table-row;}
            dt, dd {display: table-cell;padding: 5px 10px;}
        </style>
    </head>
    <body>
        <div>
            <h1><?= $title ?></h1>
            <dl>
                <dt>Имя</dt>
                <dd><?= $name ?></dd>
            </dl>
            <dl>
                <dt>Фамилия</dt>
                <dd><?= $lastName ?></dd>
            </dl>
            <dl>
                <dt>Возраст</dt>
                <dd><?= $age ?></dd>
            </dl>
            <dl>
                <dt>О себе</dt>
                <dd><?= $about ?></dd>
            </dl>
            <dl>
                <dt>Почта</dt>
                <dd><?= $mail ?></dd>
            </dl>
            <dl>
                <dt>Город</dt>
                <dd><?= $city ?></dd>
            </dl>            
        </div>
    </body>
</html>
