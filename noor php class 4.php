<?php
$day = 3;
$dayName;

switch($day) {
  case 1:
    $dayName = "Monday";
    break;
  case 2:
    $dayName = "Tuesday";
    break;
  case 3:
    $dayName = "Wednesday";
    break;
  case 4:
    $dayName = "Thursday";
    break;
  case 5:
    $dayName = "Friday";
    break;
  default:
    $dayName = "Unknown";
}

echo $dayName; // Outputs: "Wednesday"


// Ternary Operator
$age = 20;
$status = ($age >= 18) ? "adult" : "minor";
echo $status; // Outputs: "adult"

$name_single_quotes = 'John';
$name_double_quotes = "Doe";
$sentence = "Hello, world!";
echo $sentence;

$count = 1;
while ($count <= 5) {
    echo $count . " ";
    $count++;
}

$count = 1;
do {
    echo $count . " ";
    $count++;
} while ($count <= 5);


// for lop

for ($i = 1; $i <= 5; $i++) {
  echo $i . " ";
  
}

echo "<br>  For loop with array<br>";

//   Nested loops
for($a = 1; $a <= 100; $a = $a + 10){
  for($b = $a; $b < $a + 10; $b++){
    echo $b . " ";
  }
  echo "<br> ";
}

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue; // Move to next iteration if $x = 4
  }
  echo "The number is: $x <br>";
}

// Continue & Break
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue; // Move to next iteration if $x = 4
  }
  echo "The number is: $x <br>";
}

//Using continue in a while loop:
	
$x = 0;
while($x < 10) {
  if ($x == 4) {
    $x++;
    continue; // Move to next iteration if $x = 4
  }
  echo "The number is: $x <br>";
  $x++;
}


//Using break in a for loop:
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break; // Jump out of the loop when $x is 4
  }
  echo "The number is: $x <br>";
}


$x = 0;

while($x < 10) {
  if ($x == 4) {
    break; // Jump out of the loop when $x is 4
  }
  echo "The number is: $x <br>";
  $x++;
}



 
for($a = 1; $a <= 10; $a++){
  if($a == 3){    
    goto a;
  }

  echo "Number : " . $a . "<br>";
}

echo "Hello";
echo " World";

a:
echo "Here is label A.";

function myMessage() {
  echo "Hello world!";
}

myMessage();


?>
