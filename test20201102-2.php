<!-- W7D1-2 -->

<?php
    // var_dump($_POST);
    // // $sql = "INSERT INTO Users (email, password) VALUES (" . $_POST["email"]");
    // $name = $_POST["email"];
    // $password = $_POST["password"];
    
    // echo $sql;


    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = ""; //root
    $dbname = "web-bootcamp";
    $dbConnection = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);

    if (isset ($_POST["email"]) && isset ($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users VALUES ('$email', '$password')";
        $response = $dbConnection->query($sql);
        var_dump($response);
        var_dump($dbConnection);

    }

    $sql = "SELECT * FROM users";
    $response = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);
    
    $sql1 = "SELECT * FROM products";
    $response1 = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);

    // var_dump($dbConnection);
    // var_dump($response->fet);

    // var_dump($GET);
    // $userID = $_GET["user_id"];
    // $sql = 

    // if (true) {
    //     }else{
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <!-- <input name="input_one"> -->
        <input name="email">
        <!-- <input name="input_two"> -->
        <input name="password">

        <button type="submit">save</button>

    </form>

    <table>
        <tbody>
            <?php foreach($response as $user) { ?>
                <tr>
                    <td><?php echo $user ['email'] ?></td>
                    <td><?php echo $user ['password'] ?></td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>