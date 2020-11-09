<?php
// W7D2
// (2:21:)
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($_GET["table"]) {
    $table = $_GET["table"];
    $sql = "SELECT * FROM $table";

    // $response = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);
    // (2:26:) type in adressbar: ?table=products - to get data array
    // (2:35:)
    $response = [];
    $sqlResponse = $dbConnection->query($sql);

    //Test: if we have a table. If no, will get an error message.
    // (2:37:) 
    if ($sqlResponse) {
        $response = $sqlResponse->fetch_all(MYSQLI_ASSOC);
    } else {
        $response = ["error" => "missing table: " . $_GET["table"]];
    }

    echo json_encode($response);
    //(2:26:)type: .../api.php?table=products - to get data array
    //type: .../api.php?table=product1 - to get error message
}

// W3D7
// (2::)
if ($_GET['product_name']) {
    $productName = $_GET['product_name'];
    $sql = "SELECT * FROM products WHERE name = '$productName'";

    $response = DB::run($sql)->fetch_assoc();

    echo json_encode(["products"=> $response]);
}