<?php
// W7D3
// W7D2
// (1:17:)
require_once __DIR__ . "/DB_wrapper.php";
// $dbhost = "localhost:3306";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "shop-i";
// $dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// (1:23:)
// $sql = "SELECT * FROM products WHERE id=".$_GET["id"];
// $product = $dbConnection->query($sql)->fetch_assoc();
//(1:28:) type: .../modify.php?id=2 - to get data in forms

// (1:58:)(2:00:)
$product = [];
if (isset($_GET["id"])) {
    $sql = "SELECT name, price, id FROM products WHERE id=" . $_GET["id"];
    // $product = $dbConnection->query($sql)->fetch_assoc();
    $product = DB::run($sql)->fetch_assoc();
}

// (1:37/47:) is field empty, do we have a data into forms?
//if no empty, refresh page (update)
if (!empty($_POST["id"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $id = $_POST["id"];
    $updateSql = "UPDATE products SET name='$name', price=$price WHERE id=$id";

    DB::run($updateSql);
    // $dbConnection->query($updateSql);
    Header("Location: /PHP2020_RCS/W7D3/list.php");

    //(2:03:)(2:15:) new insert will be made
} else if (isset($_POST["id"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $addSql = "INSERT INTO products (name, price) VALUES ('$name', $price)";

    // $dbConnection->query($addSql);
    DB::run($addSql);
    Header("Location: /PHP2020_RCS/W7D3/list.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify2</title>
</head>
<!-- (1:20/27:)(2:01:(about: ?? '')) -->

<body>
    <form method="POST">
        <input name="name" value="<?= $product["name"] ?? '' ?>">
        <input name="price" value="<?= $product["price"] ?? '' ?>">
        <input type="hidden" name="id" value="<?= $product["id"] ?? '' ?>">

        <button>Save</button>
    </form>
</body>

<script>
    let isTimeoutActive = null;

    document.getElementsByName("name")[0].addEventListener('keyup', function() {
        console.log("key presed");
        if (isTimeoutActive) {
            clearTimeout(isIimeoutActive);
        }

        isIimeoutActive = setTimeout(function() {
            const name = document.getElementsByName("name")[0].value;
            fetch("/PHP2020_RCS/W7D3/api.php")
                .then(response = response.json())
                .then(function(data) {
                    console.log(data)
                })

        }, 500)
    });
</script>

</html>