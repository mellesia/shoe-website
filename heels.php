
<?php
    // PHP code to connect to the database
    $localhost="localhost";
    $user="root";
    $password="";
    $dbname="trendy_shoe";

    $conn = new mysqli($localhost, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the product details from the database
    $productId = 1; // ID of the product you want to display
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    $conn->close();
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       .product-img {
            width: 100%;
            height: 100% ;
            /* max-height: 400px; */
            object-fit: cover ;
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
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="images/products/boots1.jpg" alt="Product Image" class="product-img">
            </div>
            <div class="col-md-6">
                <h2 class="product-name">Product Name</h2>
                <div class="product-details">
                    <div class="form-group">
                        <label class="size-label" for="size">Size:</label>
                        <select class="form-control" id="size">
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="quantity-label" for="quantity">Quantity:</label>
                        <div class="quantity-control">
                            <button class="btn btn-outline-secondary" type="button" id="decrease-quantity">-</button>
                            <input type="text" class="form-control text-center" id="quantity" value="1">
                            <button class="btn btn-outline-secondary" type="button" id="increase-quantity">+</button>
                        </div>
                    </div>
                    <button class="btn btn-primary add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript code to handle quantity control
        const decreaseBtn = document.getElementById('decrease-quantity');
        const increaseBtn = document.getElementById('increase-quantity');
        const quantityInput = document.getElementById('quantity');

        decreaseBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
            }
        });

        increaseBtn.addEventListener('click', () => {
            let quantity = parseInt(quantityInput.value);
            quantity++;
            quantityInput.value = quantity;
        });
    </script>
</body>
</html>