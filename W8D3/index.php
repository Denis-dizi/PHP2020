<?php
// (1:37:) copied from W8D2
echo "index.php - test Session W8D3<br>";

if (isset($_GET["page"])) {
    $file = __DIR__ . "/controllers/" . $_GET["page"] . "Controller.php";
    session_start();

    if (file_exists($file)) {
        if (
            $_GET["page"] === 'login'
            || $_GET["page"] === 'register'
        ) {
            require_once $file;
        } else if (isset($_SESSION["id"])) {
            require_once $file;
        } else {
            Header("Location: /PHP2020_RCS/W8D3/?page=login");
        }
    } else {
        Header("Location: /PHP2020_RCS/W8D3/?page=login");
    }
}