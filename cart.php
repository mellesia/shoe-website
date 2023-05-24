<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-4">
        <h2>Shopping Cart</h2>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if the cart is set
                    if (isset($_SESSION['cart'])) {
                        $total = 0;

                        foreach ($_SESSION['cart'] as $product_id => $product) {
                            echo '<tr>';
                            echo '<td>' . $product['shoe_name'] . '</td>';
                            echo '<td>$' . $product['price'] . '</td>';
                            echo '<td>';
                            echo '<input type="number" class="form-control" name="quantity" value="' . $product['order_amount'] . '">';
                            echo '</td>';
                            echo '<td>$' . ($product['price'] * $product['quantity']) . '</td>';
                            echo '<td><a href="remove.php?product_id=' . $product_id . '" class="btn btn-danger btn-sm">Remove</a></td>';
                            echo '</tr>';

                            $total += $product['price'] * $product['order_amount'];
                        }

                        // Display total
                        echo '<tr>';
                        echo '<td colspan="3" class="text-right"><strong>Total:</strong></td>';
                        echo '<td colspan="2">$' . $total . '</td>';
                        echo '</tr>';
                    } else {
                        echo '<tr>';
                        echo '<td colspan="5">Your cart is empty.</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>