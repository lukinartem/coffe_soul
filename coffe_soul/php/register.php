<?php
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

// // проверка длинны вводимых данных

if(mb_strlen($email) < 4 || mb_strlen($email) > 90) {
    echo "Недопустимая длинна почты";
    exit();
} else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Недопустимая длинна имени";
    exit();
} else if (mb_strlen($password) < 5 || mb_strlen($password) > 50) {
    echo "Недопустимая длинна пароля";
    exit();
}

// хэширование пароля

$password = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);


// подключение к базе данных

$mysql = new mysqli('localhost','root','','register');

// помещение данных в таблицу базу данных
$mysql ->query("INSERT INTO `users` (`email`, `password`, `name`, `adress`, `phone`) VALUES('$email', '$password', '$name', '$adress', '$phone')") or die(mysql_error());
// закрытие
$mysqli->error;
$mysql ->close();

// переадресация страницы

header('Location: /coffe_soul/index2.html');
exit();



