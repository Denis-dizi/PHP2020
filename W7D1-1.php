<?php
$name = "Your name";
$lastName = "Your last name";
echo "</br>";
$arr = ['one', 'two', $name];
// Array push:
$arr[] = "New el";
echo "</br>";
$obj = ["key" => "value", "key2" => "value2"];
echo "</br>";
$obj["obj"]["level-1"]["level-2"] = ["level-3" => "val"];

// const obj = {key: value};

echo $name. " ". $lastName;
// echo $obj;

// var_dump
var_dump($obj);
echo "</br>";
echo "</br>";
print_r($obj);


foreach($arr as $value) {
    echo $value;
}

echo "</br>";

foreach($arr as $value) {
    echo $value."<br>";
   
}

foreach($arr as $user => $name) {
    echo $user. ": " .$name . "<br>";
}

echo "</br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input name="input_one">
        <input name="input_two">

        <button type="submit">save</button>

    </form>
    
</body>
</html>