<?php

require ( '../connectDB.php' ) ;
include '../includes/nav.php';

if (isset($_GET['item_id'])) {
  $id = $_GET['item_id'];
  $sql = "DELETE FROM products WHERE item_id='$id'";
if ($link->query($sql) === TRUE) {
    header("Location: read.php");
} else {
    echo "Error deleting record: " . $link->error;
 }
}

include '../includes/footerMK.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - Delete</title>
  <link rel="stylesheet" type="text/css" href="stylesCRUD.css">
</head>
<body>
  
</body>
</html>