<?php
// 

class UserForm {
    private $btnText;

    public function html() {
        ?>
        <form method="POST">
            <label for="">
                Email
                <input name="email">
            </label>
            <label for="">
                Password
                <input type="password" name="password">
            </label>
            <button type="submit">Save User</button>

        </form>
<?php
    }

    public function setBtnText() {
        $this->btnText = $text;
    }

    public function getBtnText() {
        return $this->btnText;
    }

}

?>