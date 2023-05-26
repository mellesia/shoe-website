<?php
session_start();
include_once("includes/connection.php");

// Check if the "remove" action is triggered and the product ID is provided in the URL
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Check if the product ID exists in the shopping cart
    if (isset($_SESSION['cart'][$productId])) {
        // Remove the product from the shopping cart
        unset($_SESSION['cart'][$productId]);
    }
}

// Redirect the user back to the shopping cart page
header("Location: cart.php");
exit();
?>
