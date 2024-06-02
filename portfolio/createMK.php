<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
	{
	  // connect to the database
	  require ('connectDB.php'); 

  // initialize an error array
  $errors = array();

  // check for item name 
  if ( empty( $_POST[ 'item_name' ] ) )
  { $errors[] = 'Enter the item name.' ; }
  else
  { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'item_name' ] ) ) ; }

  // check for a item decription
  if (empty( $_POST[ 'item_desc' ] ) )
  { $errors[] = 'Enter the item decription.' ; }
  else
  { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }
  
  // check for a item image
  if (empty( $_POST[ 'item_img' ] ) )
  { $errors[] = 'Enter the item image.' ; }
  else
  { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'item_img' ] ) ) ; }
  
  // check for a item price
  if (empty( $_POST[ 'item_price' ] ) )
  { $errors[] = 'Enter the item price.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }

	
  // on success data into my_table on database
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO products (item_name, item_desc, item_img, item_price) 
	VALUES ('$n','$d', '$img', '$p' )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<p>New record created successfully</p>'; }
  
    // close database connection
    mysqli_close($link); 

    exit();
  }
   
  // or report errors
  else 
  {
    echo '<p>The following error(s) occurred:</p>' ;
    foreach ( $errors as $msg )
    { echo "$msg<br>" ; }
    echo '<p>Please try again.</p></div>';
    // close database connection
    mysqli_close( $link );
	
  }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MK Time - Create</title>
</head>
<body>

  <?php
      include 'includes/navMK.php';
  ?>

<div class="container">
  <div class="row g-3">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

      <h1>Add Item</h1>
        <form action="createMK.php" method="post" >
          <!-- input box for item name  -->
          <label for="name">Item Name:</label>
          <input type="text" 
          id="item_name" 
          class="form-control" 
          name="item_name" 
          required 
          value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?> ">
          
          <br>
          <br>

          <!-- input box for item description -->  
          <label for="description">Description:</label>
          <textarea id="item_desc" 
          class="form-control" 
          name="item_desc" 
          required 
          value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>">
          </textarea>
          
          <br>
          <br>

        <!-- input box for image path -->
        <label for="image">Image:</label>
        <input type="text" 
        id="item_img" 
        class="form-control" 
        name="item_img" 
        required 
        value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>">

        <br>
        <br>

        <!-- input box for item price -->
        <label for="price">Price:</label>
        <input 
        type="number" 
        id="item_price" 
        class="form-control" 
        name="item_price" 
        min="0"
        required 
        value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>"><br>
          <!-- submit button -->
          <br>
          <input type="submit" class="btn btn-danger" value="Submit">
        </form>

       

    </div>
    <div class="col-lg-3"></div>
   </div>
</div>

    <?php
        include 'includes/footerMK.php';
    ?>
</body>
</html>