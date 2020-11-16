<?php
// (1:37:) copied from W8D2
echo "modifyController.php - test W8d3<br>";

require_once __DIR__ . "/../models/listModel.php";
$model = new listModel();
if (!empty($_POST["id"])) {
    //Update
    $model->updateById(
        $_POST["id"],
        $_POST["name"],
        $_POST["price"],
    );
} else {
    //Insert
    $model->insertNew(
        $_POST["name"],
        $_POST["price"],
    );
}

Header("Location: /PHP2020_RCS/W8D3/?page=list");
?>