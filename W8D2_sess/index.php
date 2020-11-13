<?php
echo "index.php - test Session<br>";


//(1:36:) Fallback: 
// If page called by user does not exist, redirect to loginController.
// if (isset($_GET["page"])) {
//     $file = __DIR__ . "/controllers/" . $_GET["page"] . "controller.php";
//     if (file_exists($file)) {
//         require_once $file;
//     } else {
//         require_once __DIR__ . "/controllers/loginController.php";
//     }
// }

//(1:38:) If user not logined, we will not allow see other pages

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
            Header("Location: /PHP2020_RCS/W8D2_sess/?page=login");
        }
    } else {
        Header("Location: /PHP2020_RCS/W8D2_sess/?page=login");
    }
}



// ===old uncorrected:
//(1:38:)(2:03:)
// if (isset($_GET["page"])) {
//     $file = __DIR__ . "/controllers/" . $_GET["page"] . "Controller.php";
//     session_start();

//     // $_SESSION;
//     if (
//         file_exists($file)
//         && ($_GET["page"] === 'login'
//             || $_GET["page"] === 'register'
//             || isset($_SESSION["id"]))
//     ) {
//         require_once $file;
//     } else {
//         Header("Location: /PHP2020_RCS/W8D2_sess/?page=login");
//     }
// }
