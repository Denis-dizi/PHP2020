<?php
// (0:48:)
echo "userForm.php - test<br>";

class UserForm {
    private $btnText;

    public function html() {
        // (:49:) copied from registerView.php
        ?> 
        <form method="POST">
            <label>
                Email
                <input name="email">
            </label>
            <label>
                Password
                <input type="password" name="password">
            </label>
            <button type="submit"><?= $this->getBtnText() ?></button>
        </form>
<?php
    }
// (:50:)
    public function setBtnText($text) {
        $this->btnText = $text;
    }

    public function getBtnText() {
        return $this->btnText;
    }

}

?>