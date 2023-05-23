<?php 
   include_once("includes/connection.php");
  $select = "SELECT product.shoe_name , product.price , shoe_image.image_name ,product.product_id, shoe_image.product_id FROM product join shoe_image on product.product_id = shoe_image.product_id;";
  $s = mysqli_query($con , $select  )

?>
<?php

$product_id = $_GET['show'];


$select = "SELECT * FROM product WHERE product_id = $product_id";
$s = mysqli_query($con, $select);

$rows = mysqli_fetch_assoc($s);

?>
<div class="container col-md-3">
    <h1> welcome in ShowByID <?= $id ?></h1>
    <div class="card">
    <img src="" alt="" class="img-top">
        <div class="card-body">
            <?php echo $rows['shoe_name']?>
        </div>
    </div>
</div>