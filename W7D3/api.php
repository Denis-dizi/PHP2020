<?php
// W7D2
// $dbhost = "localhost:3306";
// $dbuser = "root";
// $dbpass = ""; 
// $dbname = "shop-i";
// $dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// W7D3 3-rd video
// (1:25:)
require_once __DIR__ . "/DB_wrapper.php";

if ($_GET["table"]) {
    $table = $_GET["table"];
    $sql = "SELECT * FROM $table";

    $response = [];
    $sqlResponse = $dbConnection->query($sql);

    //Test: if we have a table. If no, will get an error message.
    if ($sqlResponse) {
        $response = $sqlResponse->fetch_all(MYSQLI_ASSOC);
    } else {
        $response = ["error" => "missing table: " . $_GET["table"]];
    }

    echo json_encode($response);
}

// W7D3 3-rd video
// (1:24:)
if ($_GET['product_name']) {
    $productName = $_GET['product_name'];
    $sql = "SELECT * FROM products WHERE name = '$productName'";

    $response = DB::run($sql)->fetch_assoc();

    echo json_encode(["products"=> $response]);
}
?>