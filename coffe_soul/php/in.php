<?php


$password = 123;
$cahs = 123;
$cahs = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

if (password_verify($cahs, $password)) {
    echo 'все ок, авторизуем...';
} else {
    echo 'пароль не подошел';
}




