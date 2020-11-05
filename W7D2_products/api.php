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
    // (2:26:) type in adressbar: ?table=products
    // (2:35:)
    $response = [];
    $sqlResponse = $dbConnection->query($sql);

    //Test: if we have a table. If no, will get an error message.
    // (2:37:) 
    if ($sqlResponse) {
        $response = $sqlResponse->fetch_all(MYSQLI_ASSOC);
    } else {
        $response = ["error" => "missing table " . $_GET["table"]];
    }

    echo json_encode($response);
    //type: http://localhost/PHP2020%20-%20RCS/products/api.php?table=products
}
