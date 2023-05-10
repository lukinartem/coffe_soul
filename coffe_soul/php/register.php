<?php


$errMsg = '';
$mysql = new mysqli('localhost','root','','register');
session_start();
function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['name'];
    header('location: ../index2.php');
}

// // проверка длинны вводимых данных

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

    if(mb_strlen($email) < 4 || mb_strlen($email) > 90) {
        $errMsg = "Недопустимая длинна почты";
        echo $errMsg;
        
        exit();
    } else if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        $errMsg = "Недопустимая длинна имени";
        echo $errMsg;
        
        exit();
    } else if (mb_strlen($password) < 5 || mb_strlen($password) > 50) {
        $errMsg = "Недопустимая длинна пароля";
        echo $errMsg;
        exit();
    } else {
        $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $user = $result->fetch_assoc();
        if ($user['email'] === $email) {
            $errMsg = "Такая почта уже существует";
            echo $errMsg;
            exit();
        } else {
        // хэширование пароля

        $password = password_hash($password, PASSWORD_DEFAULT);

        // подключение к базе данных

        // помещение данных в таблицу базу данных
        $mysql ->query("INSERT INTO `users` (`email`, `password`, `name`, `adress`, `phone`) VALUES('$email', '$password', '$name', '$adress', '$phone')");
        $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $user = $result->fetch_assoc();
        userAuth($user);
        // закрытие
        $mysqli->error;
        $mysql ->close();
        userAuth($user);
        exit(); 
        }}}
else {
    $email = '';
    $name = '';
    $password = '';
    $adress = '';
    $phone = '';
    }
