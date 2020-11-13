<?php
// (0:42:)
echo "listModel.php - test print model<br>"; // (1:20:)
require_once __DIR__ . "/../../W7D3/DB_wrapper.php"; //(0:44:)
class listModel
{
    // (0:43:)
    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

        return $response;
    }
    // (1:51:)
    public function deleteById($id)
    {
        $sql = "DELETE FROM products WHERE id=$id";
        DB::run($sql);
    }
    // (2:24:)
    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";
        $response = DB::run($sql);

        // var_dump($response); //(2:25:)
        if ($response->num_rows === 0) {
            return [];
        } else {
            return $response->fetch_assoc();
        }
    }
    // (2:38:)
    public function updateById($id, $name, $price)
    {
        $sql = "UPDATE products SET name = '$name', price=$price WHERE id=$id ";
        DB::run($sql);
    }

    // (2:41:)
    public function insertNew($name, $price)
    {
        $sql = "INSERT INTO products (name, price) VALUES ('$name', $price)";
        DB::run($sql);
    }
}
