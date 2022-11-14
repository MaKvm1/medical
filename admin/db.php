<?php
//задаем переменные со значениями подключения к БД
//Имя БД
$db_name = "20095_medcenter";
//Хост
$db_host = "10.100.3.80";
//Логин
$login = "20095";
//Пароль
$password = "rkcmej";
//При успешном подключении к базе данных в скрипт будет возвращён созданный объект PDO.
try {
    $dbh = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";charset=utf8",$login, $password);
    print "Подключение стабильно!";
} catch (PDOException $e) {
    //Если возникнем ошибка, то выдаст соответствующую надпись
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>