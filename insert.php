<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'demo_php_basic';
$conn = new mysqli($host,$user,$password,$database);


$name = $_POST['name'];
$price = $_POST['price'];
$thumbnail = $_POST['thumbnail'];



$sql = 'INSERT INTO products (name , price , thumbnail) values ( "'.$name.'" , '.$price.' , "'.$thumbnail.'" )';

if ($conn->query($sql)){
    echo '<p>them moi thanh cong </p><a href="index.php"> di den bang ket qua</a>';
}
else {
    echo '<p>them moi that bai</p><a href="form.php"> quay lai them moi</a>';
}