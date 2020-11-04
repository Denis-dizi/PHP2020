<!-- W7D2 -->
<?php

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = ""; //root
$dbname = "shop-i";
$dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM products";
$products = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);
// var_dumb($products);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List W7D2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td colspan="3">Products</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td></td>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td>
                        <!-- <a href="<?= urlencode("/PHP2020 - RCS/products/modify.php?id=") ?><?= $product["id"] ?>">Edit</a> -->
                        <a href="/PHP2020 - RCS/products/modify.php?id=<?= $product["id"] ?>">Edit</a>
                        <a href="/PHP2020 - RCS/products/delete.php?id=<?= $product["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="/PHP2020 - RCS/products/modify.php">Add product</a>

</body>

</html>

<script>
    // error responce
    // (2:37:)
    $.ajax({
        url: "/PHP2020 - RCS/products/api.php?table=products"
    }).done(function(response) {
        response = JSON.parse(response);
        if (response.error) {
            alert(response.error)
        }
    });
</script>