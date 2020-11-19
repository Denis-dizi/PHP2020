<?php
// (1:37:) copied from W8D2
require_once __DIR__ . "/../../../vendor/autoload.php"; // (2:43:)
use DB\DB; // (2:43:)

echo "listModel.php - test print model W8D3<br>";
// require_once __DIR__ . "/../../W7D3/DB_wrapper.php"; // (2:43:)
class listModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

        return $response;
    }
    public function deleteById($id)
    {
        $sql = "DELETE FROM products WHERE id=$id";
        DB::run($sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";
        $response = DB::run($sql);

        if ($response->num_rows === 0) {
            return [];
        } else {
            return $response->fetch_assoc();
        }
    }
    public function updateById($id, $name, $price)
    {
        $sql = "UPDATE products SET name = '$name', price=$price WHERE id=$id ";
        DB::run($sql);
    }
    // (2:57:)
    public function insertNew($name, $price, $categoryId)
    {
        $sql = "INSERT INTO products (name, price, category_id) VALUES ('$name', $price, $categoryId)";
        DB::run($sql);
    }
}
