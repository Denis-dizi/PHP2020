<?php
// (1:37:) copied from W8D2
echo "registerView.php - test W8D3<br>";
var_dump("View"); // (:06:)

require_once __DIR__ . "/../components/userForm.php";

class RegisterView {
    public function html() {
        $form = new UserForm();
        $form->setBtnText("Save new user"); //changes button!
        $form->html();
    }
}
?>