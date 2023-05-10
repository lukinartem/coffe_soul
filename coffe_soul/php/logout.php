<?php

session_start();

unset($_SESSION['id']); 
unset($_SESSION['login']);
header('location: ../index2.php');