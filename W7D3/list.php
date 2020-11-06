<?php
// W7D3
// W7D2
// (0:27:)

// (0:30:)

require_once __DIR__ . "/DB_wrapper.php";
// $dbhost = "localhost:3306";
// $dbuser = "root";
// $dbpass = ""; //root
// $dbname = "shop-i";
// $dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// (0:35:)
$sql = "SELECT * FROM products";
$products = DB::run($sql)->fetch_all(MYSQLI_ASSOC);
$a = "a";
// var_dumb($products);
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
        <!-- (0:37:) -->
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
            <!-- (0:41:) -->
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?= $product["name"] ?></td>
                    <td><?= $product["price"] ?></td>
                    <td>
                        <!-- (0:45:) -->
                        <a href="/PHP2020_RCS/W7D3/modify.php?id=<?= $product["id"] ?>">Edit</a>
                        <a href="/PHP2020_RCS/W7D3/delete.php?id=<?= $product["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- (1:55:) -->
    <a href="/PHP2020_RCS/W7D3/modify.php">Add product</a>

</body>

</html>

<script>
    // (2:27:) ajax request:
    $.ajax({
        url: "/PHP2020_RCS/W7D3/api.php?table=products"
        // (2:38:) error message
    }).done(function(response) {
        response = JSON.parse(response);
        if (response.error) {
            alert(response.error)
        }
    });
</script>