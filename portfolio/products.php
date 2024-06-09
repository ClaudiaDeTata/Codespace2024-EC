<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Time - Products</title>
  <link rel="stylesheet" type="text/css" href="stylesMK.css">
</head>
<body>
  <?php

    session_start();
    
    // check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
    // redirect to login page if not logged in
    header("Location: loginMK.php");
      exit();
    }
      
      include ('includes/navRegMK.php');
	    require ( 'connectDB.php' );

        // retrieve items from products table
            $q = "SELECT * FROM products" ;
            $r = mysqli_query( $link, $q ) ;
            if ( mysqli_num_rows( $r ) > 0 ) {
                // display body
            echo '
            <div class="container">
              <div class="row">';
              while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                  echo '
                      <div class="col-lg-4 mt-5">
                        <div class="card mb-4" style="width: 400px;">
                            <img src="img/' . $row['item_img']. ' " class="card-img-top" alt="Watch" style="width: 100%; height: 300px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-center">' . $row['item_name'] . '</h5>
                                <p class="card-text">' . $row['item_desc'] . '</p>
                            </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><p class="text-center">&pound;' . $row['item_price'] . '</p></li>
                              <li class="list-group-item text-center"><a class="btn btn-dark" href="added.php?id=' . $row['item_id'] . '">Buy Now</a></li>
                          </ul>
                      </div>
                  </div>';
              }
              echo '</div></div>';
              } else {
              echo '<p>There are currently no items in the table to display.</p>';
          }
          mysqli_close($link);

   include ('includes/footerMK.php');
?>
</body>
</html>