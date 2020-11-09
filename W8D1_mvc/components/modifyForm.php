<?php

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
        <form action="/PHP2020_RCS/W8D1_mvc/?page=modify" method="POST">
            <input name="name" value="<?= $this->name ?>">
            <input name="price" value="<?= $this->price ?>">
            <input name="hidden" name="id" value="<?= $this->id ?>">

            <button type="submit">Save</button>
        </form>
        <?php
    }
}

?>