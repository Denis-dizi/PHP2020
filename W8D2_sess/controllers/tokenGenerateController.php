<?php
// (2:37:)
echo "tokenGenerateController.php - test<br>";

require_once __DIR__ . "/../DB_wrapper_ses.php"; // (2:40:)

function getToken($length) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 

    for ($i = 0; $i < $length; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 

    return $randomString; 
};

$token = getToken(30);

var_dump($token);
// (2:40:)
DB::run("INSERT INTO tokens VALUES ('$token')");
?>