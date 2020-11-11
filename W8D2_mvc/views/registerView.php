<?php
// 
// 
// class RegisterView
// {
//     public function html()
//     {
// 
//         <form method="POST">
//             <label for="">
//                 Email
//                 <input name="email">
//             </label>
//             <label for="">
//                 Password
//                 <input type="password" name="password">
//             </label>
//             <button type="submit">Save User</button>

//         </form>
// <?php
//     }
// }

require_once __DIR__ . "../components/userForm.php";

class RegisterView {

    public function html() {
        $form = new UserForm();
        $form->setBtnText("Save user");
        $form->html();
    }
}



?>