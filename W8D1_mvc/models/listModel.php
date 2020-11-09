<?php

require_once __DIR__ . "/../DB_wrapper.php";



    class listModel {

        public function getAll() {
            $sql = "SSELECT * FROM products";
            $response = DB::run($sql)->fetch_all(MYSQLI_ASSOC);

            return $response;
        }
    }
?>