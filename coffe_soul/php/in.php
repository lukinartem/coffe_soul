<?php


$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

$errMsg = '';

// // проверка длинны вводимых данных
$mysql = new mysqli('localhost','root','','register');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    if(mb_strlen($email) < 4 || mb_strlen($email) > 90) {
        $errMsg = "Недопустимая длинна почты";
        
        exit();
    } else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        $errMsg = "Недопустимая длинна имени";
        
        exit();
    } else if (mb_strlen($password) < 5 || mb_strlen($password) > 50) {
        $errMsg = "Недопустимая длинна пароля";
        exit();
    }
    else {
        $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $user = $result->fetch_assoc();
        if ($user['email'] === $email) {
            $errMsg = "Такая почта уже существует";
            exit();
        } 
    }
}

// / хэширование пароля

$password = password_hash($password, PASSWORD_DEFAULT);

// помещение данных в таблицу базу данных

$mysql ->query("INSERT INTO `users` (`email`, `password`, `name`, `adress`, `phone`) VALUES('$email', '$password', '$name', '$adress', '$phone')");
// закрытие
$mysqli->error;
$mysql ->close();




