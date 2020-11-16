<?php
// (1:37:) copied from W8D2
echo "deleteController.php - test W8d3<br>"; // (::)

require_once __DIR__ . "/../models/listModel.php";

if (isset($_GET["product_id"])) {
    $model = new listModel();
    $model->deleteById($_GET["product_id"]);
}

Header("Location: /PHP2020_RCS/W8D3/?page=list");

?>