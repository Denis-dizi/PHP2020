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
$obj = ["key" => "value", "key2" => "value2"];

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
echo "foreach:";
echo "</br>";
foreach($arr2 as $value) {
    echo $value;
}
echo "</br>";
echo "</br>";



foreach($arr2 as $value) {
    echo $value."<br>";

}
echo "</br>";
echo "</br>";


// Array push:
// $arr2[] = "New el";
// echo "</br>";
// 
// echo "</br>";
// $obj["obj"]["level-1"]["level-2"] = ["level-3" => "val"];

// // const obj = {key: value};

// echo $name. " ". $lastName;
// // echo $obj;





// echo "</br>";


// foreach($arr as $user => $name) {
//     echo $user. ": " .$name . "<br>";
// }

// echo "</br>";



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