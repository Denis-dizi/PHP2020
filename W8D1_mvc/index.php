<?php
//(0:15:)
echo ("test MVC");

// $_SERVER
// $_GET

//(0:19:)
if (isset($_GET["page"])) {
    require_once __DIR__ . "/controllers/" . $_GET["page"] . "controller.php";
}

//. $_GET["page"] . "controller.php" = 
// ?page=list
// http://localhost/PHP2020_RCS/W8D1_mvc/?page=list