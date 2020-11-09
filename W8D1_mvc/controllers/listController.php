<?php
    require_once __DIR__ ."/../views/listView.php";
    require_once __DIR__ ."/../views/listModel.php";

    $model = new listModel();
    $products = $model->getAll();

    // var_dump($products);

    $view = new listView();
    $view->html();
?>