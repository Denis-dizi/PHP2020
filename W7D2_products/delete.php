<?php
// W7D2
// (0:52:)
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// (0:54:)
$id = $_GET["id"];
$sql = "DELETE FROM products WHERE id=$id";
$dbConnection->query($sql);

Header('Location: /PHP2020_RCS/W7D2_products/list.php');
