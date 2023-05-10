<?php
$orderInfo = json_decode($_POST['arr']);
$mysql = new mysqli('localhost','root','','register');
session_start();
$usersID = $_SESSION['id'];



for ($i=0; $i<(count($orderInfo)-1); $i++) {
    
    $id = $orderInfo[$i]->id;
    $title = $orderInfo[$i]->title;
    $weight = $orderInfo[$i]->weight;
    $price = $orderInfo[$i]->price;
    $counter = $orderInfo[$i]->counter;
    $date = $orderInfo[$i]->date;
    $mysql ->query("INSERT INTO `products` (`usersID`, `id`, `title`, `weight`, `price`, `counter`, `date`) VALUES('$usersID', '$id', '$title', '$weight', '$price', '$counter', '$date')");        
 }
$sumProducts = array_pop($orderInfo);
print_r($sumProducts);
$sumPrice = $sumProducts->sumPrice;
$sumPriceDate = $sumProducts->date;
$mysql ->query("INSERT INTO `orders` (`usersID`, `sumPrice`, `date`) VALUES('$usersID', '$sumPrice', '$sumPriceDate')");
$mysqli->error;
$mysql ->close();



