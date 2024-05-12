<?php
    // Include navigation 
    include ( 'includes/nav.php' ) ;

    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
    {
      // Connect to the database
      require ('connect_db.php'); 
        // Initialize an error array
        $errors = array();

    // Check for an item id
        if ( empty( $_POST[ 'item_id' ] ) )
        { $errors[] = 'Update item ID.' ; }
        else
        // sanitizing data escaping special chars in a string to prevent SQL injection attacks
        { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'item_id' ] ) ) ; }
    
    // Check for an item name
        if ( empty( $_POST[ 'item_name' ] ) )
        { $errors[] = 'Update item name.' ; }
        else
        { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }
  
    // Check for an item description
        if (empty( $_POST[ 'item_desc' ] ) )
        { $errors[] = 'Update item description.' ; }
        else
        { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }
  
    // Check for an item img
        if (empty( $_POST[ 'item_img' ] ) )
        { $errors[] = 'Update image address.' ; }
        else
        { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }
    
    // Check for an item price
        if (empty( $_POST[ 'item_price' ] ) )
        { $errors[] = 'Update item price.' ; }
        else
        { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }

        // if the form submission is valid we use update to modify existing records
        if ( empty( $errors ) ) 
      {
        $q = "UPDATE products SET item_id='$id',item_name='$n', item_desc='$d', item_img='$img', item_price='$p' 
                WHERE item_id='$id'";

            // executing the query
            $r = @mysqli_query ( $link, $q ) ;
        
        // checking if the update query executed correctly    
        if ($r)
        { 
          // the user will be redirected to the read page
          header("Location: read.php");
          } else {
            // otherwise an error message is diplayed
            echo "Error updating record: " . $link->error;
        }

     // Close database connection
     mysqli_close( $link );
    } 
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>
  <div class="container">
    <form action="update.php" method="post">
      <label for="item_id">Item ID:</label>
      <input type="text" name="item_id" id="item_id" class="form-control" value="<?php if (isset($_POST['item_id'])) echo $_POST['item_id']; ?>">
      
      <label for="item_name">Item Name:</label>
      <input type="text" name="item_name" id="item_name" class="form-control" value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?>">
      
      <label for="item_desc">Item Description:</label>
      <textarea name="item_desc" id="item_desc" class="form-control"><?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?></textarea>
      
      <label for="item_img">Image Address:</label>
      <input type="text" name="item_img" id="item_img" class="form-control" value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">
      
      <label for="item_price">Item Price:</label>
      <input type="text" name="item_price" id="item_price" class="form-control" value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">
      
      <button type="submit">Update Item</button>
    </form>
  </div>
</body>
</html>