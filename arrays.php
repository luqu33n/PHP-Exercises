<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = [
    "sushi",
    "steak",
    "pizza",
    "cheese"
];

/*
Print every array element in a new line.
*/

echo "<pre>";
    print_r($food);
echo "</pre>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
*/
     
echo "<ul>
  <li>{$food[0]}</li>
  <li>{$food[1]}</li>
  <li>{$food[2]}</li>
  <li>{$food[3]}</li>
</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
    $food[0] => "seafood",
    $food[1] => "meat",
    $food[2] => "carbs",
    $food[3] => "dairy"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main course 
cheesesake | desert 
*/

foreach($food_assoc as $k => $v){
    echo "{$k} | {$v} <br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
    $food[0] => [
        "type" => "seafood",
        "origin" => "Japan"
    ],
    $food[1] => [
        "type" => "meat",
        "origin" => "America"
    ],
    $food[2] => [
        "type" => "carbs",
        "origin" => "Italy"
    ],
    $food[3] => [
        "type" => "dairy",
        "origin" => "France"
    ]
];

foreach($food_assoc as $k => $v){
    echo "<ul>";
    echo "<li>{$k}:";
    foreach($v as $key => $value) {
        echo "<ul>";
        echo "<li>{$key} : {$value}</li>";
        echo "</ul>";
    }
    echo "</li>";
    echo "</ul>";
}

echo "<br>";

echo "<hr>";

echo "<br>";

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

foreach($food_assoc as $k => $v){
    echo "{$k} | ";
    foreach($v as $key => $value) {
        echo " {$value} | ";
    }
    echo "<br>";
}

echo "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
*/

echo "<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>";
  
foreach($food_assoc as $k => $v){
    echo "<tr>";
    echo "<th>{$k}</th>";
    foreach($v as $key => $value) {
        echo "<th>{$value}</th>";
    }
    echo "</tr>";
}

echo "</table>";
     
//echo "<table>
//  <tr>
//    <th>food</th>
//    <th>type</th>
//    <th>origin</th>
//  </tr>
//  <tr>
//    <td>pizza</td>
//    <td>main course</td>
//    <td>Italy</td>
//  </tr>
//  <tr>
//    <td>cheesecake</td>
//    <td>desert</td>
//    <td>Greece</td>
//  </tr>
//</table>";

?>