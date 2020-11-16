<?php
// (1:13:) copied from W8D2
echo "loginController.php - test<br>";

require_once __DIR__ . "/../components/userForm.php";
require_once __DIR__ . "/../DB_wrapper_ses.php";

if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $response = DB::run($sql)->fetch_assoc();

    var_dump($response);

    if ($response) {
        if (!empty($_POST["password"])) {
            $salt = "#/A5ax%*9)&!@%asd";
            $password = $_POST["password"];
            $password = $password . $salt;

            $isValidPassword = password_verify(
                $password,
                $response["password"]
            );
            if ($isValidPassword) {
                echo "Congrats!! You're inn.";
                session_start();
                $_SESSION["id"] = $response["email"];
                Header("Location: /PHP2020_RCS/W8D2_sess/?page=list");
            } else {
                echo "Invalid password";
            }
        } else {
            echo "Password not set";
        }
    } else {
        echo "User with email: '$email' does not exists";
    }
}

$form = new UserForm();
$form->setBtnText("Login");
$form->html();
