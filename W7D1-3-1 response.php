<?php
// W7D1
// (1:37:)
// Practise: file will comunicate with data base, will write into data base and tables

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

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
$sql1 = "SELECT * FROM products";
$response1 = $dbConnection->query($sql1)->fetch_all(MYSQLI_ASSOC);

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
        <input name="email">
        <input name="password">

        <!-- <input name="email" value="<?php echo $email ?>">
        <input name="password"> -->

        <button type="submit">save</button>

    </form>

    <!-- (1:49:) -->
    <table>
        <tbody>
            <?php foreach ($response1 as $user) { ?>
                <tr>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>