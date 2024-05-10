<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Else Statement</title>
</head>
<body>
  
<form action="" method="post">
  Enter a number: <input type="number" name="age"><br>
  <input type="submit" value="How old are you?">
</form>
<p id="result"></p>

<?php
// checking if the value has been submitted
if(isset($_POST['age'])) {
  // retrieving the value
  $age = $_POST['age'];

if ( $age < 13 ) {
  $result = 'You are a child.';
} elseif ( $age >= 13 && $age <=17 ) {
  $result = 'You are a teenager.';
} elseif ( $age >=18 && $age <=64 ) {
  $result = 'You are an adult.';
} else 
  $result = 'You are a senior citizen.' ;

  echo $result;
}
?>

</body>
</html>