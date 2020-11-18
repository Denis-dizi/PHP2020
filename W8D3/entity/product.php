<?php

namespace W8D3\entity; //(2:39:)
//(2:25:)

require_once __DIR__ . "/../../../vendor/autoload.php"; // (2:44:)

use DB\DB;

class Product
{
    private $name;
    private $price;
    private $category_id;
    private $id;

    private $_category_name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    //(2:33:) setter, getter
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    public function getCategoryName(): string
    {
        if (!isset($this->_category_name)) {
            $sql = "SELECT title FROM product_categories WHERE id =" . $this->getCategoryId();
            $this->_category_name = DB::run($sql)->fetch_assoc()["title"];
        }
        return $this->_category_name;
    }
}
