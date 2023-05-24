<?php 
 include_once("includes/connection.php");
$product_id = $_GET['show'];

$select = "SELECT * FROM product WHERE product_id = $product_id";
$s = mysqli_query($con , $select);

$rows = mysqli_fetch_assoc($s);
?>
<div class="container col-md-3">
    <h1> welcome in ShowByID <?= $product_id?> </h1>
    <div class="card">
    <img src="" alt="" class="img-top">
        <div class="card-body">
            <?php echo $rows['shoe_name']?>

        </div>
    </div>
</div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>