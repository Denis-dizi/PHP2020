<?php
//  (0:21:)
    echo "List controller";
    require_once __DIR__ ."/../views/listView.php";
    require_once __DIR__ ."/../models/listModel.php";
    require_once __DIR__ ."/../components/modifyForm.php";

    $model = new listModel();
    $products = $model->getAll();

    // var_dump($products);

    $view = new listView($products);
    $view->html();

    if(isset($_GET["action"])&& $_GET["action"] === "modify") {
        if (isset($_GET["product_id"])) {
            $product = $model->getById($_GET["product_id"]);

            $form = new modifyForm($product["name"], $product["price"], $product["id"]);
        } else {
            $form = new modifyForm();
        }
        $form->html();
    }
?>