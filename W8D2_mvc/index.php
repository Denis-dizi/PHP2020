<?php
//(0:15:)
echo ("test MVC");

// $_SERVER
// $_GET

//(0:19:)
if (isset($_GET["page"])) {
    require_once __DIR__ . "/controllers/" . $_GET["page"] . "controller.php";
    session_start();

    // $_SESSION;
    if (
        file_exists($file)
        && ($_GET["page"] === 'login'
            || $_GET["page"] === 'register'
            || isset($_SESSION["id"]))
    ) {
        require_once $file;
    } else {
        Header("Location: /mvc/?page=login");
    }
}

// } else if (isset ($_SESSION["id"])){
//     require_once $file;
// } else {
//     Header("Location: /mvc/?page=login");
//     // require_once __DIR__ . "/PHP2020_RCS/W8D2_mvc/controllers/loginController.php";


//. $_GET["page"] . "controller.php" = 
// ?page=list
// http://localhost/PHP2020_RCS/W8D1_mvc/?page=list