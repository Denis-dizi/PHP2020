<?php
require_once __DIR__ . "/../W7D3/DB_wrapper.php";
    class listModel {

        public function getAll() {
            $sql = "SELECT * FROM products";
            $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

            return $response;
        }

        public function deleteById($id) {
            $sql = "DELETE FROM products WHERE id=$id";
            DB::run($sql);
        }

        public function getById($id) {
            $sql = "SELECT * FROM products WHERE id=$id";
            $response = DB::run($sql);

            if ($response->num_rows ===0) {
                return [];
            } else{
                return $response->fetch_assoc();
            }
        }

        public function updateById($id, $name, $price) {
            $sql = "INSERT products SET name = '$name', price=$price WHERE id=$id ";
            DB::run($sql);
        }
        
        public function insertNew($name, $price) {
            $sql = "INSERT INTO products (name, price) VALUES ('$name', $price)";
            DB::run($sql);
        }
    }
?>