<?php
// (2:41:)
echo "readTokenController.php - test<br>";

require_once __DIR__ . "/../DB_wrapper_ses.php";
$token = $_GET["token"];

$tokenExists = DB::run("SELECT * FROM tokens WHERE token = '$token'")->fetch_assoc();

if($tokenExists) {
    echo "You can access, token apruved.";
} else {
    Header("Location: /PHP2020_RCS/W8D2_sess/?page=list");
}

?>