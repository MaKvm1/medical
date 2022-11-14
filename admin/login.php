<?php
require_once __DIR__.'/db.php';

// Проверяем наличие пользователя с указанным юзернеймом
$stmt = $dbh->prepare("SELECT * FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if (!$stmt->rowCount()) {
    flash('Пользователь с такими данными не зарегистрирован');
    header('Location: admin.php');
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Проверяем пароль
if (password_verify($_POST['password'], $user['password'])) {
    // Проверяем, не нужно ли использовать более новый алгоритм
    // или другую алгоритмическую стоимость
    // Например, если вы поменяете опции хеширования
    if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
        $newHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $dbh->prepare('UPDATE `users` SET `password` = :password WHERE `login` = :login');
        $stmt->execute([
            'login' => $_POST['login'],
            'password' => $newHash,
        ]);
    }
    $_SESSION['user_id'] = $user['id'];
    header('Location: ../index.php');
    die;
}

flash('Пароль неверен');
header('Location: admin.php');
