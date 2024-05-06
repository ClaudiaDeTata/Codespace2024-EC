<?php
/* Write a PHP program that displays the multiplication table of a given number using a for loop.

The program should accept a single input from the user, which is the number whose multiplication table should be displayed. 
The output should display the multiplication table from 1 to 10.
For example, if the user enters the number 5, the output should be:



Multiplication table of 5:

5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
5 x 4 = 20
5 x 5 = 25
5 x 6 = 30
5 x 7 = 35
5 x 8 = 40
5 x 9 = 45
5 x 10 = 50
    
    
To complete this task, you will need to use a for loop to iterate over the numbers from 1 to 10, 
and display the product of the input number and the current iteration variable on each iteration.

You may also need to use string concatenation (. operator) to combine the different parts of the output string. */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loop PHP</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="number" name="number"
      placeholder="Type your number" required>
      
      <button type="submit">Calculate</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number = $_POST["number"];

    echo "<p>Multiplication table of " . $number . ":</p>";

      for ($i = 1; $i <= 10; $i++)
      {
        $result = $number * $i;
       
        echo "<p>". $number . " x " . $i . " = " . $result . "</p>";   
      }  
    } 
    
?> 
</body>
</html>
