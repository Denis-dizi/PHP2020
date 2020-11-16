<?php
// (1:37:) copied from W8D2
echo "listController.php - test List controller W8d3<br>";
require_once __DIR__ . "/../views/listView.php";
require_once __DIR__ . "/../models/listModel.php";
require_once __DIR__ . "/../components/modifyForm.php";

if (isset($_POST["logOut"])) {
    session_destroy();
    Header("Location: /PHP2020_RCS/W8D3/?page=login");
}

$model = new listModel();
$products = $model->getAll();

$view = new listView($products);
$view->html();

if (isset($_GET["action"]) && $_GET["action"] === "modify") {
    if (isset($_GET["product_id"])) {
        $product = $model->getById($_GET["product_id"]);

        $form = new modifyForm($product["name"], $product["price"], $product["id"]);
    } else {
        $form = new modifyForm();
    }
    $form->html();
}