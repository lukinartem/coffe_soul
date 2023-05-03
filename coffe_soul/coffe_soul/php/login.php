<?php
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','','register');

$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");

// вывод данных в массив
$user = $result->fetch_assoc();


if(count($user) == 0) {
    echo "Пользователь не найден";
    exit();
}
$hash = $user['password'];
if (password_verify($password, $hash)) {
    echo 'все ок, авторизуем...';
    
} else {
    echo 'пароль не подошел';
    echo $hash;
    echo $password;
}

exit();

$mysql ->close();

