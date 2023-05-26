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
</head>
<body>
    <h1>Shopping Cart</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php foreach ($cartItems as $productId => $cartItem) : ?>
            <?php if (is_array($cartItem)) : ?>
                <tr>
                    <td><?= $cartItem['shoe_name'] ?></td>
                    <td><?= $cartItem['quantity'] ?></td>
                    <td><?= $cartItem['price'] ?></td>
                    <td><?= $cartItem['price'] * $cartItem['quantity'] ?></td>
                    <td>
                        <a href="remove.php?action=remove&product_id=<?= $productId ?>">Remove</a>
                    </td>
                </tr>
            <?php else : ?>
                <tr>
                    <!-- <td colspan="5">Invalid cart item: <?= $cartItem ?></td> -->
                </tr>
            <?php endif ?>
        <?php endforeach ?>
    </table>
    <p>Total Price: <?= calculateTotalPrice($cartItems) ?></p>
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>
