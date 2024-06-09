<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesMK.css">
    
    <title>MK Time - Cart</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8">

<?php 

include ('includes/navRegMK.php');
include ('session-cart.php');

// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // update changed quantity field values
  foreach ( $_POST['quantity'] as $item_id => $item_qty )
  {
    // ensure values are integers
    $id = (int) $item_id;
    $quantity = (int) $item_qty;

    // change quantity or delete if zero
    if ( $quantity == 0 ) { unset ($_SESSION['cart'][$id]); } 
    elseif ( $quantity > 0 ) { $_SESSION['cart'][$id]['quantity'] = $quantity; }
  }
 }

// initialize grand total variable
$total = 0; 

// display the cart if not empty
if (!empty($_SESSION['cart']))
{
  require ('connectDB.php');
  
  // retrieve all items in the cart from the products table
  $q = "SELECT * FROM products WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  echo '<div class="container mt-3">
          <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Shopping Cart</h1>
                    <form action="cart.php" method="post">
                        <table class="table table-hover mt-5">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>';
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    // calculate sub-totals and grand total
    $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
    $total += $subtotal;

    echo '<tr>
                <td>' . htmlspecialchars($row['item_name']) . '</td> 
               <td><input type="text" class="form-control" size="3" name="quantity[' . $row['item_id'] . ']" value="' . $_SESSION['cart'][$row['item_id']]['quantity'] . '"></td>
                <td>&pound; ' . htmlspecialchars($row['item_price']) . '</td> 
                <td>&pound; ' . number_format($subtotal, 2) . '</td>
              </tr>';
    }
  
  mysqli_close($link); 
  
  // display total
  echo ' <tr>
                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                        <td><strong>&pound; ' . number_format($total, 2) . '</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <input type="submit" name="submit" class="btn btn-dark" value="Update My Cart">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <a href="checkout.php?total=' . htmlspecialchars($total) . '" class="btn btn-outline-dark">Checkout Now</a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>';
}
else
// or display message
{ echo '<div class="container mt-5">
            <div class="alert alert-secondary text-center" role="alert">
                <p>Your cart is currently empty.</p>
                <a href="products.php" class="btn btn-light">Return to shop</a>
            </div>
          </div>' ; }

include ( 'includes/footerMK.php' ) ;

?>
  </div>
<div class="col-lg-4 mt-5">
           
            <div class="card mt-5">
                <img class="card-img-top" src="img/bgr1.jpg" alt="Right Image">
                <div class="card-body">
                    <h5 class="card-title">Special Offer</h5>
                    <p class="card-text">Check out our special offer for today!</p>
                    <a href="#" class="btn btn-outline-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>