<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MK Time - Read</title>
  <link rel="stylesheet" type="text/css" href="stylesCRUD.css">
</head>

<body>
    <?php
     
      include ('../includes/nav.php');
	       require ( '../connectDB.php' );

        // retrieve items from products table
            $q = "SELECT * FROM products" ;
            $r = mysqli_query( $link, $q ) ;
            if ( mysqli_num_rows( $r ) > 0 ) {
                // display body
            echo '<div class="container">
                  <div class="row">';
              while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                  echo '
                      <div class="col-lg-4">
                        <div class="card mb-4" style="width: 400px;">
                            <img src="' . $row['item_img'] . '" class="card-img-top" alt="Watch" style="width: 100%; height: 300px; object-fit: cover;">
                            <div class="card-body" style="padding: 10px; height: 160px">
                                <h5 class="card-title text-center">' . $row['item_name'] . '</h5>
                                <p class="card-subtitle mb-2 text-body-secondary">' . $row['item_desc'] . '</p>
                            </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><p class="text-center">&pound;' . $row['item_price'] . '</p></li>
                              <li class="list-group-item text-center"><a class="btn btn-dark btn-sm" href="update.php?id=' . $row['item_id'] . '">Update Item</a></li>
                              <li class="list-group-item"><a class="btn btn-outline-dark btn-sm" href="delete.php?item_id=' . $row['item_id'] . '">Delete Item</a></li>
                          </ul>
                      </div>
                  </div>';
              }
              echo '</div></div>';
              } else {
              echo '<p>There are currently no items in the table to display.</p>';
          }
          mysqli_close($link);

   include ('../includes/footerMK.php');
?>

</body>
</html>