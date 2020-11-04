<?php
// W7D1
// (1:37:)
// Practise: file will comunicate with data base, will write into data base and tables

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

var_dump($dbConnection);
// var_dump($response->fet);


// if (isset($_POST["email"]) && isset($_POST["password"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $sql = "INSERT INTO users VALUES ('$email', '$password')";
//     $response = $dbConnection->query($sql);
//     var_dump($response);
//     var_dump($dbConnection);
// }

// $email = '';
// $password = '';
// if (isset($_GET["email"])) {
//     $email = $_GET["email"];
//     $sql = "SELECT * FROM users WHERE email = '$email'";
//     $user = $dbConnection->query($sql)->fetch_assoc();
//     $email = $user["email"];
//     $password = $user["password"];
//     // var_dump($user);

// }

// $sql = "SELECT * FROM users";
// $response = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);

// $sql1 = "SELECT * FROM products";
// $response1 = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);

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
        <input name="input_one">
        <input name="input_two">

        <!-- <input name="email" value="<?php echo $email ?>">
        <input name="password"> -->

        <button type="submit">save</button>

    </form>

    <!-- <table>
        <tbody>
            <?php foreach ($response as $user) { ?>
                <tr>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table> -->

</body>

</html>