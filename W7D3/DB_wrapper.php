<?php
// W7D3
// (0::)

class DB {
    private static $connection;
    
    private static function openConnection()
{
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "shop-i";

static::$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// if (static::$connection->connect_error) {
//     die("Connection failed: ".static::$connection->connect_error);
// }

}


private static function closeConnection()
{
    static::$connection->close();
    static::$connection = null;
}

public static function run($sql)
{
    if(!static::$connection) {
        static::openConnection();
    }

    $response = static::$connection->query($sql);

    if ($response === TRUE) {
        $response - static::$connection->insert_id;
    }

    
    if (static::$connection->error) {
        die("SQL error: " .static::$connection->error . "</br>");
    } else {
        return $response;
    }
    
    static::closeConnection();
}

}
