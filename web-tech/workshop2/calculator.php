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
  <form name="form1" id="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="calc">Enter the first number: </label>
    <input type="number" id="calc" name="number1" value=""><br>
    <br>
 <label for="calc">Enter the second number: </label>
    <input type="number" id="calc" name="number2" value=""> 
    <br>
    <p>Select an operation: <select name="operation" id="operation">
        <option value="addition">Addition (+)</option>
        <option value="subtraction">Subtraction (-)</option>
        <option value="multiplication">Multiplication (*)</option>
        <option value="division">Division (/)</option>  
      </select>
    </p>
    <input type="submit" name="calculate" value="Calculate">
  </form>       
  <p id="result"></p>

  <?php
  // Check if form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the numbers from the form
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $operation = $_POST['operation'];
      
      // Perform the calculation based on the selected operation
      switch($operation) {
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = 'Cannot divide by zero';
            }
            break;
        default:
            $result = 'Invalid operation';
  }
  // Display the result
  echo "Result: " . $result;
}
?>
</body>
</html>