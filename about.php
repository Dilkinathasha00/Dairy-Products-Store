<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-3.png" alt="">
         <h3>why choose us?</h3>
         <p>"Choose us for your dairy needs because we prioritize quality and freshness above all else. Our products are sourced from local farms, ensuring that you receive the best-tasting and most nutritious dairy products available. With our commitment to excellence, you can trust that you are getting the finest dairy products for you and your family."</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>"At our dairy product website, we provide a wide range of fresh and high-quality dairy products. From milk and yogurt to cheese and butter, we offer products that are sourced from local farms and crafted with care. With our commitment to quality, you can trust that you're getting the best dairy products for you and your family."</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"I absolutely love the yogurt from this website! It's so creamy and flavorful, perfect for breakfast. Plus, I love that it's delivered right to my door, so convenient!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sam Fernando</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"The cheese selection is amazing. I've tried a few different kinds and they've all been delicious. I especially love the aged cheddar, it has such a rich flavor!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Taniya Herath</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I'm a big fan of their dairy products. The quality is always top-notch and you can really taste the difference compared to store-bought products. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Henry Carl</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I tried their yogurt and cheese and they were both amazing. The yogurt was so creamy and the cheese had such a nice flavor. I'll definitely be ordering again."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Madusha Rajapaksha</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"I've been ordering from this website for a few months now. I'm  impressed by the freshness of the products and the milk tastes like it came straight from the farm!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Perera</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"As a cheese lover, I love trying new flavors and experimenting with different pairings. This website has really elevated my cheese game!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chulakshi Ranasinghe</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>