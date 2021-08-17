<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'demo_php_basic';

$conn = new mysqli($host,$user,$password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$sql = 'INSERT INTO products (name , price , thumbnail) values ( "ao dep 3" , 3456 , "https://adchiase.com/upload/tour/bang-ngoc-dextra-cach-len-do-phu-hieu-dextra509202702743.jpg" )';
$sql = "SELECT * FROM products ORDER BY id DESC";

$result = $conn->query($sql);
echo '<a href="form.php"><button style="height: 40px;width: 120px;background: red;color: aliceblue;cursor: pointer">add product</button></a><br><br>';
if($result){
    foreach ($result as $item){
        echo '<div style="width: 33.33%;float: left"><h1>'.'name : '.$item["name"].'</h1><p>price : '.$item["price"].'</p> <h2><img style="width:80%;height:230px;object-fit:cover;" src="'.$item["thumbnail"].'">' . '</h2></div>';
    }
}
else {
    echo "error";
}





//if($conn->query($sql) === true){
//    echo "created new record";
//}else {
//    echo "error";
//}



?>