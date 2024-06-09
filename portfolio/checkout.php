<?php 
    include ('session-cart.php');
    include ('includes/navRegMK.php');
    include ('includes/footerMK.php');

// check for total and cart
if ( isset( $_GET['total'] ) && ( $_GET['total'] > 0 ) && (!empty($_SESSION['cart']) ) )
{
  
  require ('connectDB.php');
  
  // store buyer and order total in orders table
  $q = "INSERT INTO orders ( user_id, total, order_date ) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW() ) ";
  $r = mysqli_query ($link, $q);
  
  // retrieve order number
  $order_id = mysqli_insert_id($link) ;
  
  // retrieve cart items from products table
  $q = "SELECT * FROM products WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  // store order contents in order_contents table
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO order_contents ( order_id, item_id, quantity, price )
    VALUES ( $order_id, 

            ".$row['item_id'].",

            ".$_SESSION['cart'][$row['item_id']]['quantity'].",

            ".$_SESSION['cart'][$row['item_id']]['price'].")" ;
            
    $result = mysqli_query($link,$query);
  }
  
  mysqli_close($link);

  // display order number
  echo '   <div class="container mt-5">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Thank you for your order!</h4>
            <p>Your Order Number is <strong>#'.$order_id.'</strong>.</p>
            <hr>
            <p class="mb-0">We greatly appreciate your continued loyalty and support. Enjoy your purchase!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';

  // remove cart items
  $_SESSION['cart'] = NULL ;
}
// or display a message
else { echo '<div class="container mt-5">
			<div class="alert alert-secondary" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p>Your cart is empty.</p>
				</div>
			</div>' ; }
?>