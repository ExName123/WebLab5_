<?php 
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru:3306/ВАША БАЗА ДАННЫХ'); //Адрес
    define('DB_USER', 'ВАШЕ ИМЯ ПОЛЬЗОВАТЕЛЯ'); //Имя пользователя
    define('DB_PASSWORD', '12345678'); //Пароль
    define('DB_NAME', 'ИМЯ БД'); //Имя БД
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $link = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD);
?>
