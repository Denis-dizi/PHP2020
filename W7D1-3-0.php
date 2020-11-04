<?php
// W7D1
// (1:22:)
// var_dump($_POST);
// $sql = "INSERT INTO Users (email, password) 
// VALUES (" . $_POST["email"] . "," . $_POST["password"].")";
// echo $sql;


// (1:27:) refactor. Not a best practise. Do not mix variables with text.
// var_dump($_POST);
// $email = $_POST["email"];
// $password = $_POST["password"];
// $sql = "INSERT INTO Users (email, password) 
// VALUES ($email,$password)";
// echo $sql;

//(1:30:) Get is going from browser. Post - from form
//examples (put after file adress in browsers adressbar): 
// ?user_id=10 // ?user_id=20&lang=eng
var_dump($_GET);

//(1:34:)
// var_dump($_SESSION);
// var_dump($_SERVER);
// var_dump($_COOKIE);

//(1:33:)
$userID = $_GET["user_id"];
$sql = "SELECT * FROM Users WHERE email = $userID";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W7D1-3-0. Post</title>
</head>

<body>
    <form method="POST">
        <input name="email">
        <input name="password">

        <button type="submit">Save</button>

    </form>
</body>

</html>