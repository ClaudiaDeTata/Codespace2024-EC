<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Calculator</title>
</head>
<body>
  <h1>Calculator</h1>
  <form name="form1" id="form1" action="">
  <label for="calc">Enter the first number: </label>
    <input type="number" id="calc" name="calc" value=""><br>
    <br>
 <label for="fname">Enter the second number: </label>
    <input type="number" id="calc" name="calc" value=""> 
    <br>
    <p>Select an operation: <select name="subject" id="subject"></p>
      <option value="addition">Addition (+)
        <?php

        $number1 = "";
        $number2 = "";
        $sum = $number1 + $number2;
        
        // echo "Addition of " . $number1 . " and " . $number2 . " is: " . $sum; 
        
        ?></option>
      <option value="subtraction">Subtraction (-)</option>
      <option value="multiplication">Multiplication (*)</option>
      <option value="division">Division (/)</option>
         </select>
             </form>
  <button id="calculateResult">Calculate</button>
  <p id="result"></p>
  <?php
  
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addText"])) {
    // Add the line of text
    echo "<p>This is a new line of text added with PHP.</p>";
}

?>
</body>
</html>