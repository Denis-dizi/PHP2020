<?php
// (0:46:)
echo "loginController.php - test<br>";

// require_once __DIR__ . "/../components/userForm.php";
// require_once __DIR__ . "/PHP2020_RCS/W7D3/DB_wrapper.php";

// if (!empty($_POST["email"])) {
//     $email = $_POST["email"];

//     $sql = "SELECT * FROM users WHERE email = '$email'";

//     $response = DB::run($sql)-> fetch_assoc();

//     // var_dump($response);

//     if($response) {
//         if (!empty($_POST["password"])) {
//             $isValidPassword = password_veryfy(
//                 $_POST["password"],
//                 $response["password"]
//             );

//             if ($isValidPassword) {
//                 session_start();
//                 $_SESSION["id"] = $response["email"];
//                 Header("Location: /mvc/?page=list")
//             } else {
//                 echo "Invalid password";
//             }

//         } else {
//             echo "Password not set";
//         }

//     } else {
//         echo "User with email: '$email' does not exists";
//     }
// }
// $form = new UserForm();
// $form->setBtnText("Login");
// $form->html();

?>