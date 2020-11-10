<?php
// W7D3
// (0:31:)

// $dbhost = "localhost:3306";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "shop-i";
// $dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

require_once __DIR__ . "/DB_wrapper.php";

$id = $_GET["id"];
$sql = "DELETE FROM products WHERE id=$id";

DB::run($sql);
// $dbConnection->query($sql);

Header('Location: /PHP2020_RCS/W7D3/list.php');
