<?php
//(0:21:) W8D1
echo "listController.php - test List controller<br>";
require_once __DIR__ . "/../views/listView.php";
require_once __DIR__ . "/../models/listModel.php";
require_once __DIR__ . "/../components/modifyForm.php";

// (2:17/22:) W8D2
if (isset($_POST["logOut"])) {
    session_destroy();
    Header("Location: /PHP2020_RCS/W8D2_sess/?page=login");
}

//(0:48:) W8D1
$model = new listModel();
$products = $model->getAll();

// (0:55:) W8D1
$view = new listView($products);
$view->html();

// var_dump($products);
// var_dump($_GET);
// var_dump($_POST); // (2:19:) W8D2



//(2:23/27:) W8D1
if (isset($_GET["action"]) && $_GET["action"] === "modify") {
    if (isset($_GET["product_id"])) {
        $product = $model->getById($_GET["product_id"]);

        $form = new modifyForm($product["name"], $product["price"], $product["id"]);
    } else {
        $form = new modifyForm();
    }
    $form->html();
}