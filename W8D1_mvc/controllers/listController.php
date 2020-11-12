<?php
//  (0:21:)
echo "listController.php - test List controller<br>";
require_once __DIR__ . "/../views/listView.php"; //(0:31:)
require_once __DIR__ . "/../models/listModel.php"; //(0:47:)
// require_once __DIR__ . "/../components/modifyForm.php";

//(0:48:)
$model = new listModel();
$products = $model->getAll();

// (0:33:)
// $view = new listView($products);
$view = new listView();
$view->html();

var_dump($products); //(0:50:)

// if (isset($_GET["action"]) && $_GET["action"] === "modify") {
//     if (isset($_GET["product_id"])) {
//         $product = $model->getById($_GET["product_id"]);

//         $form = new modifyForm($product["name"], $product["price"], $product["id"]);
//     } else {
//         $form = new modifyForm();
//     }
//     $form->html();
// }
