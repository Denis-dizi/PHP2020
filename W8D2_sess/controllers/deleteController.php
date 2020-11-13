<?php
// (1:49:)
echo "deleteController.php - test<br>"; // (::)

require_once __DIR__ . "/../models/listModel.php";

if (isset($_GET["product_id"])) {
    $model = new listModel();
    $model->deleteById($_GET["product_id"]);
}

Header("Location: /PHP2020_RCS/W8D2_sess/?page=list");

?>