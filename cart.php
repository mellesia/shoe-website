<?php
session_start();
include_once("includes/connection.php");

// Function to calculate the total price of cart items
function calculateTotalPrice($cart) {
    $total = 0;
    if (is_array($cart)) {
        foreach ($cart as $item) {
            if (is_array($item)) {
                $total += $item['price'] * $item['quantity'];
            }
        }
    }
    return $total;
}

// Check if $_SESSION['cart'] is set and an array
$cartItems = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Check if the "remove" action is triggered
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Check if the product ID exists in the shopping cart
    if (isset($cartItems[$productId])) {
        // Remove the product from the shopping cart
        unset($cartItems[$productId]);

        // Update the $_SESSION['cart'] variable with the updated shopping cart
        $_SESSION['cart'] = $cartItems;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <!-- Include necessary CSS stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        h1 {
            margin-bottom: 20px;
        }

        .total-price {
            margin-top: 20px;
            font-weight: bold;
        }

        .checkout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .remove-btn {
            color: #f00;
        }


        .table .thead-dark th {
          color: #fff;
         background-color: deeppink;
          border-color: deeppink;
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
      margin-bottom: 0.5rem;
      font-family: inherit;
      font-weight: 500;
      line-height: 1.2;
       color: inherit;
       text-align: center;
       }


    </style>
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cartItems)) : ?>
                    <?php foreach ($cartItems as $productId => $cartItem) : ?>
                        <?php if (is_array($cartItem)) : ?>
                            <tr>
                                <td><?= $cartItem['shoe_name'] ?></td>
                                <td><?= $cartItem['quantity'] ?></td>
                                <td><?= $cartItem['price'] ?></td>
                                <td><?= $cartItem['price'] * $cartItem['quantity'] ?></td>
                                <td>
                                    <a href="remove.php?action=remove&product_id=<?= $productId ?>" class="remove-btn">Remove</a>
                                </td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td colspan="5">Invalid cart item: <?= $cartItem ?></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5">No items in the cart.</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
        <?php if (!empty($cartItems)) : ?>
            <p class="total-price">Total Price: <?= calculateTotalPrice($cartItems) ?></p>
            <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
        <?php endif ?>
    </div>
</body>
</html>
