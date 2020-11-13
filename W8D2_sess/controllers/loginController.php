<?php
// (0:46:)
echo "loginController.php - test<br>";

// (1:13:)
require_once __DIR__ . "/../components/userForm.php"; // (1:13:)
require_once __DIR__ . "/../DB_wrapper_ses.php"; // (1:17:)

// (1:14:)
if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    $sql = "SELECT * FROM users WHERE email = '$email'";

    $response = DB::run($sql)->fetch_assoc();

    var_dump($response);

    // (1:18:) interesting experiments!!!
    if ($response) {
        // (1:19:) do DB have an user, is the passwrd valid:
        // (1:22:) Only for hashed in DB passwords.
        if (!empty($_POST["password"])) {
            //(2:33:) SALT
            $salt = "#/A5ax%*9)&!@%asd";
            $password = $_POST["password"];
            $password = $password . $salt;

            $isValidPassword = password_verify(
                $_POST["password"],
                $response["password"]
            );
            //    (1:23:)
            if ($isValidPassword) {
                echo "Congrats!! You're inn.";
                // (1:50:)
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

// (1:13:)
$form = new UserForm();
$form->setBtnText("Login");
$form->html();
