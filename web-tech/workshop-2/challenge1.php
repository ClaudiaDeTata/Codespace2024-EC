<?php
// 1.
/* First, create two variables called $width and $height, and assign them the respective values of 10 and 5.
Next, create a third variable called $area, and assign it the value of $width multiplied by $height.
Finally, print out a string that includes the value of $width, $height, and $area in a sentence.

Output

The rectangle has a width of 10 meters, a height of 5 meters, and an area of 50 square meters.*/
?>

<?php

$width = 10;
$height = 5;
$area = $width * $height;

echo "The rectangle has a width of " . $width . " meters, a height of " . $height . " meters, and an area of " . $area . " square meters.";
?>

<br>

<?php
// 2.
/* Create a PHP program that takes two numbers and outputs the result of adding, subtracting, multiplying, and dividing them. 
The program should also concatenate the two numbers into a string.


Output

Addition of 10 and 5 is: 15 
Subtraction of 10 and 5 is: 5 
Multiplication of 10 and 5 is: 50 
Division of 10 and 5 is: 2 
Concatenation of 10 and 5 is: 105*/
?>

<br>

<?php

$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2;

echo "Addition of " . $number1 . " and " . $number2 . " is: " . $sum; 

?>

<br>

<?php

$number1 = 10;
$number2 = 5;
$difference = $number1 - $number2;

echo "Subtraction of " . $number1 . " and " . $number2 . " is: " . $difference;

?>

<br>

<?php

$number1 = 10;
$number2 = 5;
$product = $number1 * $number2;

echo "Multiplication of " . $number1 . " and " . $number2 . " is: " . $product;

?>

<br>

<?php

$number1 = 10;
$number2 = 5;
$quotient = $number1 / $number2;

echo "Division of " . $number1 . " and " . $number2 . " is: " . $quotient;

?>

<br>

<?php

$number1 = 10;
$number2 = 5;
$concatenated = $number1 . "" . $number2;

echo "Concatenation of " . $number1 . " and " . $number2 . " is: " . $concatenated;

?>
<br>
<br>

<?php
// 3.
/* Create a program that uses variables to store the user's age and the number of days, hours, and minutes they have been alive.

Output

Welcome to the Age Calculator!

Your age: 25

You have been alive for:
9125 days
219000 hours
13140000 minutes
    */
?>

<?php

$age = 42;
$days = 365;
$hours = 24;
$minutes = 60;

$string1 = "Welcome to the Age Calculator!";
$string2 = "Your age: " . $age ;
$string3 = "You have been alive for: " ;
$string4 = $days * $age . " days";
$string5 = $hours * $age . " hours";
$string6 = $minutes * $age . " minutes";

echo $string1 . "<br>" . "<br>" . $string2 . "<br>" . "<br>" . $string3 . "<br>" . $string4 . "<br>" . $string5 . "<br>" . $string6;

?>

<br>
<br>

<?php
// 3.
/*Create and initialise an array variable using a suitable variable name to display the following values:

Monday
Tuesday
Wednesday
Thursday
Friday
Saturday
Sunday
*/
?>

<?php

$week = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') ;

foreach( $week as $value )
echo " $value " . "<br>" ;

?>

