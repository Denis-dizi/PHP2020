<?php
//(2:34)
echo "modifyController.php - test<br>"; // (::)

require_once __DIR__ . "/../models/listModel.php";
$model = new listModel();
if (empty($_POST["id"])) {
    //Update
    $model->updateById(
        $_POST["id"],
        $_POST["name"],
        $_POST["price"],
    );
} else {
    //Insert (2:41:)
    $model->insertNew(
        $_POST["name"],
        $_POST["price"],
    );
}

Header("Location: /PHP2020_RCS/W8D1_mvc/?page=list");
?>