<?php
    
    include ( '../includes/nav.php' ) ;

    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
    {
      
      require ('../connectDB.php'); 
        // initialize an error array
        $errors = array();

    // check for item id
        if ( empty( $_POST[ 'item_id' ] ) )
        { $errors[] = 'Update item ID.' ; }
        else
        // sanitizing data 
        { $id = mysqli_real_escape_string( $link, trim( $_POST[ 'item_id' ] ) ) ; }
    
    // check for item name
        if ( empty( $_POST[ 'item_name' ] ) )
        { $errors[] = 'Update item name.' ; }
        else
        { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }
  
    // check for item description
        if (empty( $_POST[ 'item_desc' ] ) )
        { $errors[] = 'Update item description.' ; }
        else
        { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }
  
    // check for item img
        if (empty( $_POST[ 'item_img' ] ) )
        { $errors[] = 'Update image address.' ; }
        else
        { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }
    
    // check for item price
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
            // otherwise error message displayed
            echo "Error updating record: " . $link->error;
        }

     mysqli_close( $link );
    } 
  }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MK Time - Update</title>
  <link rel="stylesheet" type="text/css" href="stylesCRUD.css">
</head>
<body>
  <div class="container pt-5">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
      <div class="p-4 bg-secondary text-dark fw-bold m-2">
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
      
      <button type="submit" class="btn-outline-dark btn-lg mt-3 fw-bold">Update Item</button>
    </form>
    </div>
</div>
     <div class="col-2"></div>
</div>
</div>
   
<?php
   include ('../includes/footerMK.php');
?>

</body>
</html>