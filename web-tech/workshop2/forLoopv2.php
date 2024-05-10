<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ForLoop</title>
</head>
<body>
  
<form action="" method="post">
  Enter a number: <input type="number" name="num"><br>
  <input type="submit" value="Generate multiplication table">
</form>

<?php
// check if the form field has been submited
if(isset($_POST['num'])) {
//retrieve the value 
$num = $_POST['num'];

echo "Multiplication table of $num: <br>";
for ($i = 1; $i <= 10; $i++) {
  $result = $num * $i;
  echo "$num x $i = $result <br>";
  } 
}
?>
</body>
</html>