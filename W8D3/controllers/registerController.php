<?php
// (1:37:) copied from W8D2

use DB\DB;

echo "registerController.php - test W8d3<br>";
var_dump("Controller"); // (0:06:)
require_once __DIR__ . "/../views/registerView.php"; //(0:06:)
require_once __DIR__ . "/../DB_wrapper_ses.php"; // (:22:)



// (0:19:) Chech if data exist?:
if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        var_dump("Can be saved!"); // (0:20:)
        $email = $_POST ["email"]; //(:25:)
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT); //(2:30:) anulled

        //(2:30:) SALT
        $password = $_POST["password"];
        $salt = "#/A5ax%*9)&!@%asd";
        $password = $password . $salt;
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $password = password_hash($password, PASSWORD_DEFAULT);


        var_dump($password); //(0:28:)

        $sql = "INSERT INTO users (email, password) VALUE ('$email', '$password')"; // (:23:)

        // (:32:) Save new User to DB
        DB::run($sql);
        Header("Location: /PHP2020_RCS/W8D3/?page=login");

    } else {  //(0:21:)
        echo "Some fields are missing!";
}

$view = new RegisterView();
$view->html();