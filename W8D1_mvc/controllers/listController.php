<?php
//  (0:21:)
echo "listController.php - test List controller<br>";
require_once __DIR__ . "/../views/listView.php"; //(0:31:)
// require_once __DIR__ . "/../models/listModel.php";
// require_once __DIR__ . "/../components/modifyForm.php";

// $model = new listModel();
// $products = $model->getAll();

// var_dump($products);

// (0:33:)
$view = new listView();
// $view = new listView($products);
$view->html();

// if (isset($_GET["action"]) && $_GET["action"] === "modify") {
//     if (isset($_GET["product_id"])) {
//         $product = $model->getById($_GET["product_id"]);

//         $form = new modifyForm($product["name"], $product["price"], $product["id"]);
//     } else {
//         $form = new modifyForm();
//     }
//     $form->html();
// }
