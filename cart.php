<?php 
   include_once("includes/connection.php");
   include_once("includes/navbar.php");

  $select = "SELECT * FROM `productcategory`";
  $s = mysqli_query($con , $select  )

?>


<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="images/trendylogo.png" type="">
   <title>shoes website</title>
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
   <div class="hero_area">
      <!-- header section strats -->
      <?php
      include_once("includes/navbar.php");
      ?>
      <!-- end header section -->
   </div>
   <!-- inner page section -->
   <section class="inner_page_head">
      <div class="container_fuild">
         <div class="row">
            <div class="col-md-12">
               <div class="full">
                  <h3>Category List</h3>
               </div>
            </div>
         </div>
      </div>
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
            </div>
            <div class="row">
             
            <?php foreach ($s as $data ):  ?>
               <div class="col-sm-6">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a class="nav-link" href="product.php?cat_id=<?= $data['categoryid']  ?>">
                               <img src="images/heels2.jpg width: 230px;" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="img-box"> <img src="<?= $data['category_image']  ?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?= $data['category_name']  ?>
                        </h5>
                     </div>
                  </div>
               </div>
             <?php endforeach ?>

            </div>
         </div>
         <div class="btn-box">
            <a href="">
               View All products
            </a>
         </div>
         </div>
      </section>
      <!-- footer section -->
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
</body>

</html>