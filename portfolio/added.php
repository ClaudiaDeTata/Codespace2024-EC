<?php

include ('session-cart.php');
include ('includes/navRegMK.php');

// initialize $id variable
$id = null;

// check if product id is passed into URL and assign it to a variable
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

require ( 'connectDB.php' ) ;

// retrieve selective item data from products table
$q = "SELECT * FROM products WHERE item_id = $id" ;
$r = mysqli_query( $link, $q ) ;

if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  // check if cart already contains one of this product id
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
    // add one more of this product
    $_SESSION['cart'][$id]['quantity']++; 
    echo '
	<div class="container mt-5">
			<div class="alert alert-secondary" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="fa-solid fa-thumbs-up fa-lg"></i></span>
				</button>
				<p>Another '.$row["item_name"].' has been added to your cart</p>
				<a href="products.php">Continue Shopping</a> | <a href="cart.php">View Your Cart</a>
			</div>
		</div>';
  } 
  else
  {
    // or add one product to the cart
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
    echo ' 
    <div class="container mt-5">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="fa-solid fa-thumbs-up fa-lg"></i></span>
                </button>
                <p>' . $row["item_name"] . ' has been added to your cart</p>
                <a href="products.php">Continue Shopping</a> | <a href="cart.php">View Your Cart</a>
            </div>
        </div>' ;
  }
}

mysqli_close($link);

include ('includes/footerMK.php');
?>