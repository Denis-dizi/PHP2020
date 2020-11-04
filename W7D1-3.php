<?php
// W7D1
// (1:37:)
// Practise: file will comunicate with data base, will write into data base and tables

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// (2:11:)
// save data only when data is available:
var_dump($_POST);
if (isset($_POST["email"]) && isset($_POST["password"])) {
    // (2:16:)
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users VALUES ('$email', '$password')";
    $response = $dbConnection->query($sql);
    var_dump($response);
    // var_dump($dbConnection);
}

// (2:42:)
$email = '';
$password = '';

// (2:32:)
if (isset($_GET["email"])) {
    $email = $_GET["email"];
    // $password = $_GET["password"];
    $sql = "SELECT * FROM users WHERE email = '$email'";

    // var_dump($dbConnection->query($sql));

    $user = $dbConnection->query($sql)->fetch_assoc();
    $email = $user["email"];
    // (2:52:)
    $password = $user["password"];
    // var_dump($user);
}

// (1:42:) connect to database
// var_dump($dbConnection);

// (1:44:) get data from database (query).
$sql = "SELECT * FROM users";
// $response = $dbConnection->query($sql);
// var_dump($response);

// (1:48:)
// var_dump($response->fetch_all());

// (1:49:)(1:55:)
$response = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);

// (1:59:)
// $sql1 = "SELECT * FROM products";
// $response1 = $dbConnection->query($sql1)->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W7D1-3. Form</title>
</head>

<body>
    <form method="POST">
        <!-- <input name="email">
        <input name="password"> -->

        <!-- (2:46:) -->
        <input name="email" value="<?php echo $email ?>">
        <input name="password" value="<?= $password ?>">

        <button type="submit">save</button>

    </form>

    <!-- (1:49:) -->
    <table>
        <tbody>
            <?php foreach ($response as $user) { ?>
                <tr>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>