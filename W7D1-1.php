<?php
// W7D1
// (0:35:)

// Variables in PHP
// $arr = [];       - in PHP
// const arr = [];  - in JS the same
// let arr = [];    - in JS the same

$arr1 = "Test1";
echo $arr1;
echo "</br>";
echo "</br>";

// (0:40:)
$name = "Vinsent";
$lastName = "Van";
echo $name . " " . $lastName;
echo "</br>";
echo "</br>";

// (0:43:)
$arr2 = ['one', 'two', $name];
// $obj = ["key" => "value"];   - in PHP
// const obj = {key: "value"};    - in JS the same
$obj = ["key1" => "value1", "key2" => "value2"];

// (0:45:)
// will print "Array":
// echo $arr2;
// echo $obj;

echo "var_dump($ arr2);";
echo "</br>";
var_dump($arr2);
echo "</br>";
echo "var_dump($ obj);";
echo "</br>";
var_dump($obj);
echo "</br>";
echo "</br>";
print_r($arr2);
echo "</br>";
echo "</br>";

//(0:48:)
echo "foreach 1:</br>";
foreach ($arr2 as $value) {
    echo $value;
}
echo "</br>";
echo "</br>";

echo "foreach 2:</br>";
foreach ($arr2 as $value) {
    echo $value . "<br>";
}
echo "</br>";

//(0:49:)
echo "foreach 3:</br>";
foreach ($obj as $key => $value) {
    echo $value . "<br>";
}
echo "</br>";

//(0:50:)
//from object: $user - key, $name - value
echo "foreach 4:</br>";
foreach ($arr2 as $user => $name) {
    echo $user . ": " . $name . "<br>";
}
echo "</br>";

echo "foreach 5:</br>";
foreach ($obj as $user => $name) {
    echo $user . ": " . $name . "<br>";
}
echo "</br>";

echo "foreach 5-1:</br>";
foreach ($obj as $user => $name) {
    echo $user . ": " . $name . " " . $lastName . "<br>";
}
echo "</br>";

//(0:54:)
echo "foreach 6:</br>";
foreach ($obj as $user1 => $name1) {
    echo $user1 . ": " . $name1 . " " . $lastName . "<br>";
}
echo "</br>";

echo "foreach 6-1:</br>";
foreach ($obj as $key => $value) {
    echo $key . ": " . $value . " " . $lastName . "<br>";
}
echo "</br>";

//(0:56:)
// Array push:
$arr3 = ['aaa', 'bbb', $name];
$arr3[] = "New el";
// echo $arr3;
// var_dump($arr3);

echo "foreach 7 after push:</br>";
foreach ($arr3 as $value) {
    echo $value . "<br>";
}
echo "</br>";

//(1:01:)
$obj2 = [
    "key1" => "value1", 
    "key2" => "value2"
];
$obj2["new key"] = "New el with key";
$obj2["obj2"]["level-1"]["level-2"] = ["level-3" => "val"];

echo "foreach 8:</br>";
foreach ($obj2 as $key => $value) {
    var_dump($value);
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