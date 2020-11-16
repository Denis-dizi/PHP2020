<?php
namespace PHP2020_RCS\W8D3\controllers;

use DB;

// (1:13:) copied from W8D2
// echo "loginController.php - test W8d3<br>";

require_once __DIR__ . "/../components/userForm.php";
// require_once __DIR__ . "/../DB_wrapper_ses.php";

class loginController
{
    // (1:17:)
    public function validateLogin()
    {
        $error = null; // (1:20:)

        if (!empty($_POST["email"])) {
            $email = $_POST["email"];

            $sql = "SELECT * FROM users WHERE email = '$email'";

            $response = DB::run($sql)->fetch_assoc();

            var_dump($response);

            if ($response) {
                if (!empty($_POST["password"])) {
                    $isValidPassword = password_verify(
                        $_POST["password"],
                        $response["password"]
                    );

                    if ($isValidPassword) {
                        echo "Congrats!! You're inn.";
                        session_start();
                        $_SESSION["id"] = $response["email"];
                        Header("Location: /PHP2020_RCS/W8D2_sess/?page=list");
                    } else {
                        $error = "Invalid password";
                    }
                } else {
                    $error = "Password not set";
                }
            } else {
                $error = "User with email: '$email' does not exists";
            }
        } else {
            $error = "Email not specified";
        }
        return $error;
    }
}

// $form = new UserForm();
// $form->setBtnText("Login");
// $form->html();
