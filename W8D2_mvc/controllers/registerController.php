<?php
// (::)
    var_dump("controller");
    require_once __DIR__ . "/../views/registerView.php";
    require_once __DIR__ . "../../W7D3/DB_wrapper.php";

    if(!empty($_POST["email"]) && !empty($_POST["password"])) {
        var_dump("can save");
        $email = $_POST ["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // var_dump($password);

        $sql = "INSERT INTO users (email, password) VALUE ('$email', '$password')";

        DB::run($sql);
        Header("Location: /PHP2020_RCS/W8D2_mvc/?page=login");

    } else {
        echo "Some fields are missing";
    }
    $view = new RegisterView();
    $view->html();

?>