<?php
// W7D1
// (1:22:)
// var_dump($_POST);
// $sql = "INSERT INTO Users (email, password) 
// VALUES (" . $_POST["email"] . "," . $_POST["password"].")";
// echo $sql;


// (1:27:) refactor. Not a best practise. Do not mix variables with text.
var_dump($_POST);
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO Users (email, password) 
VALUES ($email,$password)";
echo $sql;


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