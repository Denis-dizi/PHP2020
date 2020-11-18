<?php
namespace PHP2020_RCS\W8D3\components;
//(1:50:)

// copied from W8D2
echo "userForm.php - test W8D3<br>";

class UserForm {
    private $btnText;

    public function html() {
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
    public function setBtnText($text) {
        $this->btnText = $text;
    }

    public function getBtnText() {
        return $this->btnText;
    }

}

?>