<?php
// W7D3 3-rd video
// (0:02:)
require_once __DIR__ . "/DB_wrapper.php";
// var_dump($_SERVER);

$sql = "SELECT * FROM products";
// (0:06:)
// $products = $dbConnection->query($sql)->fetch_all(MYSQLI_ASSOC);
$products = DB::run($sql)->fetch_all(MYSQLI_ASSOC);
// (0:34:)
$a = "a";
// var_dump($products);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List2</title>
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
                        <a href="/PHP2020_RCS/W7D3/modify.php?id=<?= $product["id"] ?>">Edit</a>
                        <a href="/PHP2020_RCS/W7D3/delete.php?id=<?= $product["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="/PHP2020_RCS/W7D3/modify.php">Add product</a>

</body>

</html>

<script>
    $.ajax({
        url: "/PHP2020_RCS/W7D3/api.php?table=products"
    }).done(function(response) {
        response = JSON.parse(response);
        if (response.error) {
            alert(response.error)
        }
    });
</script>