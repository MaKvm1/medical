<?php

require_once __DIR__.'/db.php';

$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /');
    die;
}

$stmt = $dbh->prepare("INSERT INTO `users` (`login`, `password`) VALUES (:login, :password)");
$stmt->execute([
    'login' => $_POST['login'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);

header('Location: admin.php');
