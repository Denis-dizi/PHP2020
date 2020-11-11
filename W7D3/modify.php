<?php
// W7D3 3-rd video

// $dbhost = "localhost:3306";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "shop-i";
// $dbConnection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// (0:14:)
require_once __DIR__ . "/DB_wrapper.php";

// $product = [];
if (isset($_GET["id"])) {
    $sql = "SELECT name, price, id FROM products WHERE id=" . $_GET["id"];
    //(0:16:)
    // $product = $dbConnection->query($sql)->fetch_assoc();
    $product = DB::run($sql)->fetch_assoc();
    // $product = DB::run($sql)->fetch_all(MYSQLI_ASSOC)[0];
    // (0:34:)
    // $a = "a";
}

// echo $product = ["name"];

//is field empty, do we have a data into forms?
//if no empty, refresh page (update)
if (!empty($_POST["id"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $id = $_POST["id"];
    $updateSql = "UPDATE products SET name='$name', price=$price WHERE id=$id";
    //(0:16:)
    // $dbConnection->query($updateSql);
    DB::run($updateSql);
    Header("Location: /PHP2020_RCS/W7D3/list.php");

    //new insert will be made
} else if (isset($_POST["id"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $addSql = "INSERT INTO products (name, price) VALUES ('$name', $price)";
    //(0:16:)
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

<body>
    <form method="POST">
        <input name="name" value="<?= $product["name"] ?? '' ?>">
        <input name="price" value="<?= $product["price"] ?? '' ?>">
        <input type="hidden" name="id" value="<?= $product["id"] ?? '' ?>">

        <button>Save</button>
    </form>
</body>

<script>
    // (1:02:) Console shows response
    // fetch("/PHP2020_RCS/W7D3/api.php")
    //     .then(function(response) {
    //         console.log(response)
    //     })


    // (1:12:) Console shows "key presed"
    // document.getElementsByName("name")[0].addEventListener('keyup', function() {
    //     console.log("key presed");
    // });


    // (1:20:)
    // let isTimeoutActive = null;

    // document.getElementsByName("name")[0].addEventListener('keyup', function() {
    //     if (isTimeoutActive) {
    //         clearTimeout(isTimeoutActive);
    //     }

    //     isTimeoutActive = setTimeout(function() {

    //         fetch("/PHP2020_RCS/W7D3/api.php")
    //             .then(function(response) {
    //                 console.log(response)
    //             })
    //     }, 500)
    // });


    // (1:22/38:)
    let isTimeoutActive = null;

    document.getElementsByName("name")[0].addEventListener('keyup', function() {
        if (isTimeoutActive) {
            clearTimeout(isTimeoutActive);
        }

        isTimeoutActive = setTimeout(function() {
            const name = document.getElementsByName("name")[0].value;
            fetch("/PHP2020_RCS/W7D3/api.php?product_name=" + name, )
                .then(response => response.json()) //(1:38:49) - correction at
                .then(function(data) {
                    console.log(data)

                    if (data.products) {
                        alert("product exists");
                    }
                })
        }, 500)
    });
</script>

</html>