<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galactic Shop - Read</title>
</head>
<body>
    <?php
      // retrieving includes files 
      include ('includes/navGS.php');

       // Open database connection
	       require ( 'connectDB.php' );

        // Retrieve items from 'products' database table.
            $q = "SELECT * FROM products" ;
            $r = mysqli_query( $link, $q ) ;
            if ( mysqli_num_rows( $r ) > 0 ) {
                // display body
            echo '<div class="container"><div class="row text-center">';
              while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                  echo '
                      <div class="col-sm-4 pt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="' . $row['item_img'] . '" class="card-img-top" alt="Sneakers">
                            <div class="card-body">
                                <h5 class="card-title text-center">' . $row['item_name'] . '</h5>
                                <p class="card-text">' . $row['item_desc'] . '</p>
                            </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><p class="text-center">&pound;' . $row['item_price'] . '</p></li>
                              <li class="list-group-item btn btn-dark"><a class="btn btn-danger btn-lg btn-block" href="update.php?id=' . $row['item_id'] . '">Update</a></li>
                              <li class="list-group-item"><a class="btn btn-danger" href="delete.php?item_id=' . $row['item_id'] . '">Delete Item</a></li>
                          </ul>
                      </div>
                  </div>';
              }
              echo '</div></div>';
              } else {
              echo '<p>There are currently no items in the table to display.</p>';
          }
          mysqli_close($link);

   include ('includes/footerGS.php');
?>

</body>
</html>