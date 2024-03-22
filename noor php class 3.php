<?php
    $a = 3;
    $b = 10;

    if($a < $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";


    if($a == $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";


    if($a === $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";

    
    if($a == $b):
        echo "A is Smaller<br>" ; 
        echo "A is Smaller<br>" ;
    endif;
    echo "Here is other statement";


    $age = 20;

    /* Logical And Operator */
    if($age >= 18 && $age <= 21){
    echo "You are eligible.<br>";
    }
    echo "Here is other statement";


$x = 5;
$y = 10;
if ($x > 0 and $y > 0) {
    echo "Both x and y are positive.";
}

$x = 5;
$y = -10;
if ($x > 0 or $y > 0) {
    echo "At least one of x and y is positive.";
}

$x = true;
$y = false;
$xorResult = ($x xor $y);
echo $xorResult; // Output: true

$x = 5;
$y = 10;
if ($x > 0 && $y > 0) {
    echo "Both x and y are positive.";
}

$x = 5;
$y = -10;
if ($x > 0 || $y > 0) {
    echo "At least one of x and y is positive.";
}


$per = 47;

if($per >= 80 && $per <= 100){
  echo "You are in Merit.";
} elseif($per >= 60 && $per < 80){
  echo "You are in Ist Division.";
} elseif($per >= 45 && $per < 60){
  echo "You are in IInd Division.";
} elseif($per >= 33 && $per < 45){
  echo "You are in IIIrd Division.";
} elseif($per < 33){
  echo "You are Fail.";
} else{
  echo "Please Enter Valid Percentage.";
}

switch (expression) {
    case value1:
        // Code to be executed if expression matches value1
        break;
    case value2:
        // Code to be executed if expression matches value2
        break;
    // Add more cases as needed
    default:
        // Code to be executed if none of the above cases match
}
?>
