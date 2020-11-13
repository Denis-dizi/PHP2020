<?php
// (:05:)
echo "registerView.php - test<br>";
var_dump("View"); // (:06:)

//(:53:)
require_once __DIR__ . "/../components/userForm.php";

class RegisterView {
    public function html() {
        $form = new UserForm();
        $form->setBtnText("Save new user"); //changes button!
        $form->html();
    }
}


// (:52:) anuled. Copied to userForm.php
// (:07:) form to add users
// class RegisterView
// {
    // public function html()
//     {
// ? >
//         <form method="POST">
//             <label>
//                 Email
//                 <input name="email">
//             </label>
//             <label>
//                 Password
//                 <input type="password" name="password">
//                 <!-- (:30:) experiment to show password-->
//                 <!-- <input name="password"> -->
//             </label>
//             <button type="submit">Save User</button>
//         </form>
// <?php
//     }
// }


?>