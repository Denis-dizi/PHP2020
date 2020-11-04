<?php
// W7D2
// 
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$id = $_GET["id"];
$sql = "DELETE FROM products WHERE id=$id";
$dbConnection->query($sql);

Header('Location: /PHP2020 - RCS/products/list.php');

?>