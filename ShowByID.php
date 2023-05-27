<?php
session_start();

include_once("includes/connection.php");

$product_id = $_GET['show'];

$select = "SELECT product.shoe_name, product.price, product.product_desc, shoe_image.image_name, product.product_id, shoe_image.product_id FROM product 
JOIN shoe_image 
ON product.product_id = shoe_image.product_id 
WHERE product.product_id = $product_id";

$s = mysqli_query($con, $select);

$rows = mysqli_fetch_assoc($s);

// Add the product to the cart
if (isset($_POST['add_to_cart'])) {
    $product = array(
        'product_id' => $rows['product_id'],
        'shoe_name' => $rows['shoe_name'],
        'price' => $rows['price'],
        'quantity' => $_POST['quantity'],
        'product_desc' => $rows['product_desc'],
        'image_name' => $rows['image_name']
    );

    // Add the product to the cart array in the session
    $_SESSION['cart'][] = $product;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Page</title>
    <link rel="shortcut icon" href="images/trendylogo.png" type="">
    <title>Shoes Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>


        .product-img {
        width: 304px;
        height: 486px;
        object-fit: contain;
        left: 60px;
        margin-left: 52px;

        }

        .product-name {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .product-details {
            margin-top: 20px;
        }

        .size-label {
            margin-top: 20px;
            font-weight: bold;
        }

        .quantity-label {
            margin-top: 20px;
            font-weight: bold;
        }

        .quantity-control {
            display: flex;
            align-items: center;
        }

        .quantity-control .btn {
            padding: 5px 10px;
            font-size: 16px;
        }

        .add-to-cart {
            margin-top: 20px;
        }

        .body{
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body class="body" background="images/b3.jpg">
    <div class="container py-4">
        <div class="row">
            <?php foreach ($s as $data) : ?>
                <div class="col-md-6">
                    <img src="<?= $data['image_name'] ?>" alt="Product Image" class="product-img">
                </div>
                <div class="col-md-6">
                    <h2 class="product-name"><?= $data['shoe_name'] ?></h2>
                    <div class="product-details">
                        <div class="form-group">
                            <label class="size-label" for="size">Size:</label>
                            <select class="form-control" id="size">
                                <option value="small">36</option>
                                <option value="medium">37</option>
                                <option value="xlarge">38</option>
                                <option value="xxlarge">39</option>
                                <option value="xllarge">40</option>
                                <option value="xlllarge">41</option>
                            </select>
                        </div>
                        <div class='row'>
                        <div class="form-group">
                            <label class="quantity-label" for="quantity">Quantity:</label>
                            <div class="quantity-control">
                                <button class="btn btn-outline-secondary" type="button" id="decrease-quantity">-</button>
                                <input type="text" class="form-control text-center" id="quantity" value="1">
                                <button class="btn btn-outline-secondary" type="button" id="increase-quantity">+</button>
                            </div>
                            
                        </div>
            </div>
                        <br>
                        <br>

                        <div class="price">
                        <h2 class="price"><?= $data['price']?>LE</h2>
                       </div> 
                       <br>
                        <div class="description">
                        <h4 class="product-desc"><?= $data['product_desc'] ?></h2>
                       </div>      

                        <form method="post" action="">
                            <input type="hidden" name="quantity" id="quantity-hidden" value="1">
                            <button class="btn btn-primary add-to-cart" name="add_to_cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const decreaseBtn = document.getElementById('decrease-quantity');
        const increaseBtn = document.getElementById('increase-quantity');
        const quantityInput = document.getElementById('quantity');
        const quantityHiddenInput = document.getElementById('quantity-hidden');

        decreaseBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                quantityHiddenInput.value = quantity;
            }
        });

        increaseBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
            quantityHiddenInput.value = quantity;
        });
    </script>
</body>

</html>
