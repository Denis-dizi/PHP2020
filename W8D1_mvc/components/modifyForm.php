<?php

class modifyForm{
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
        <form>
            
        </form>

        <?php
    }
}


?>