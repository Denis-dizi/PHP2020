<?php
// (1:37:) copied from W8D2
echo "modifyForm.php - test W8D3<br>"; // (::)
class modifyForm
{
    private $name;
    private $price;
    private $id;

    public function __construct($name = null, $price = null, $id = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->id = $id;
    }

    public function html() {
        ?>
        <form action="/PHP2020_RCS/W8D3/?page=modify" method="POST"><!-- (2:32) -->
            <input name="name" value="<?= $this->name ?>">
            <input name="price" value="<?= $this->price ?>">
            <input type="hidden" name="id" value="<?= $this->id ?>">

            <button type="submit">Save</button>
        </form>
        <?php
    }
}

?>