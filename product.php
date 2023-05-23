<?php 
   include_once("includes/connection.php");
  $select = "SELECT product.shoe_name , product.price , shoe_image.image_name ,product.product_id, shoe_image.product_id FROM product join shoe_image on product.product_id = shoe_image.product_id;";
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
                  <h3>Product Grid</h3>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end inner page section -->
   <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               Our <span>products</span>
            </h2>
         </div>


         <div class="row">

         <?php foreach ($s as $data ):  ?>
            <div class="col-sm-6 col-md-4 col-lg-4">
               <div class="box">
                  <div class="option_container">\
                     <div class="options">
                           <a href="" class="option1">
                           Add to card
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                     </div>
                  </div>
                  <div class="img-box">
                     <img src="<?= $data['image_name']  ?>" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        <?= $data['shoe_name']  ?>
                     </h5>
                     <h6>
                     <?= $data['price']  ?>
                     </h6>
                  </div>
               </div>
            </div>
           <?php endforeach ?>

         <div class="btn-box">
            <a href="">
               View All products
            </a>
         </div>
      </div>
   </section>
   <!-- end product section -->
   <!-- footer section -->
   <footer class="footer_section">
      <div class="container">
         <div class="row">
            <div class="col-md-4 footer-col">
               <div class="footer_contact">
                  <h4>
                     Reach at..
                  </h4>
                  <div class="contact_link_box">
                     <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                           Location
                        </span>
                     </a>
                     <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                           Call +01 1234567890
                        </span>
                     </a>
                     <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                           demo@gmail.com
                        </span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 footer-col">
               <div class="footer_detail">
                  <a href="index.html" class="footer-logo">
                     Famms
                  </a>
                  <p>
                     Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200
                     Latin words, combined with
                  </p>
                  <div class="footer_social">
                     <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                     </a>
                     <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                     </a>
                     <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                     </a>
                     <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                     </a>
                     <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4 footer-col">
               <div class="map_container">
                  <div class="map">
                     <div id="googleMap"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-info">
            <div class="col-lg-7 mx-auto px-0">
               <p>
                  &copy; <span id="displayYear"></span> All Rights Reserved By
                  <a href="https://html.design/">Free Html Templates</a><br>

                  Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
               </p>
            </div>
         </div>
      </div>
   </footer>
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