<?php
// W7D2
// (1:17:)
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// (1:23:)
// $id = $_GET["id"];

// $sql = "DELETE FROM products WHERE id=$id";
// $sql = "SELECT * FROM products WHERE id=".$_GET["id"];
// $product = $dbConnection->query($sql)->fetch_assoc();
// (1:58:)(2:00:)
$product = [];
if (isset($_GET["id"])) {
    $sql = "SELECT name, price, id FROM products WHERE id=" . $_GET["id"];
    $product = $dbConnection->query($sql)->fetch_assoc();
}


// (1:37/47:) is field empty?
if (!empty($_POST["id"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $id = $_POST["id"];
    $updateSql = "UPDATE products SET name='$name', price=$price WHERE id=$id";

    $dbConnection->query($updateSql);

    Header("Location: /PHP2020_RCS/W7D2_products/list.php");
} else if (isset($_POST["id"])) {   //(2:03:)(2:15:) new insert will be made
    $name = $_POST["name"];
    $price = $_POST["price"];
    $addSql = "INSERT INTO products (name, price) VALUES ('$name', $price)";

    $dbConnection->query($addSql);
    Header("Location: /PHP2020_RCS/W7D2_products/list.php");
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<!-- (0:20:)(2:01:) -->
<body>
    <form method="POST">
        <input name="name" value="<?= $product["name"] ?? '' ?>">
        <input name="price" value="<?= $product["price"] ?? '' ?>">
        <input type="hidden" name="id" value="<?= $product["id"] ?? '' ?>">

        <button>Save</button>
    </form>
</body>

</html>