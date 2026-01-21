<?php
include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
  $user_id = $_COOKIE['user_id'];
} else {
  $user_id = '';
}

include 'components/add_wishlist.php';
include 'components/add_cart.php';


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- box icon cdn link  -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!------------------------bootstrap icon link------------------------------->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!------------------------bootstrap css link------------------------------->
  <!------------------------slick slider link------------------------------->
  <link rel="stylesheet" type="text/css" href="slick.css" />
  <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="user_style.css">
  <title>Rimberio Indian Fashion Website Template</title>
</head>

<body>

  <?php
  include 'components/user_header.php';
  ?>


  <div class="container-fluid">
    <div class="hero-slider">

      <div class="slider-item">
        <img src="image/home-slide.jpg" alt="">
        <div class="slider-caption">

          <h1>Street style has its own rules</h1>
          <p>Where fashion is not just about clothes, but also about personal expression and confidence. which are
            different from mainstream fashion and provide an opportunity for
            personal expression.</p>
          <a href="shop.php" class="btn"> shop now</a>
        </div>
      </div>

      <div class="slider-item">
        <img src="image/home-slide0.jpg" alt="">
        <div class="slider-caption">

          <h1>Brand and Designer Features</h1>
          <p>The future of fashion brands will be based on the integration of social media and e-commerce, which will
            help in engaging more directly with customers.</p>
          <a href="shop.php" class="btn"> shop now</a>
        </div>
      </div>

      <!-- <div class="slider-item">
        <img src="image/home-slide1.jpg" alt="">
        <div class="slider-capti	on">

          <h1>street style has its own rules</h1>
          <p>Where fashion is not just about clothes, but also about personal expression and confidence. which are
            different from mainstream fashion and provide an opportunity for
            personal expression.</p>
          <a href="shop.php" class="btn"> shop now</a>
        </div>
      </div> -->

      <!-- <div class="slider-item">
        <img src="image/home-slide2.jpg" alt="">
        <div class="slider-caption">

          <h1>Final Clearance sale</h1>
          <p>The countdown has begun! Get up to 50% off on selected items in our Final Clearance Sale.</p>
          <a href="shop.php" class="btn"> shop now</a>
        </div>
      </div> -->
    </div>
    <div class="controls">
      <i class="bx bx-left-arrow-alt prev"></i>
      <i class="bx bx-right-arrow-alt next"></i>
    </div>
  </div>

  <div class="services">
    <div class="box-container">
      <div class="box">
        <div class="icon">
          <img src="image/service.png" alt="">
        </div>
        <div class="detail">
          <h4>online shopping</h4>
          <span>100% secure</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="image/services2.png" alt="">
        </div>
        <div class="detail">
          <h4>quality product</h4>
          <span>100% secure</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="image/services.png" alt="">
        </div>
        <div class="detail">
          <h4>delivery</h4>
          <span>24 * 7 hours</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="image/services0.png" alt="">
        </div>
        <div class="detail">
          <h4>customer services</h4>
          <span>support gift services</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="image/service.png" alt="">
        </div>
        <div class="detail">
          <h4>well organized</h4>
          <span>24 * 7 free returns</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="image/services1.png" alt="">
        </div>
        <div class="detail">
          <h4>much more</h4>
          <span>100% secure</span>
        </div>
      </div>

    </div>
  </div>

  <img src="image/-sub-banner.jpg" class="sub-banner">

  <div class="frame-container">
    <div class="box-container">
      <div class="frame">
        <div class="detail">
          <span>shop seasonal</span>
          <h2>50% off</h2>
          <h1>all seasonl fashion</h1>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>

      <div class="box">
        <div class="box-detail">
          <img src="image/lookbook4.jpg" class="img">
          <div class="img-detail">
            <span>wide range</span>
            <h1>fresh letest collections</h1>
            <a href="shop.php" class="btn">shop now</a>
          </div>
        </div>

        <div class="box-detail">
          <img src="image/lookbook5.jpg" class="img">
          <div class="img-detail">
            <span>wide range</span>
            <h1>fresh letest collections</h1>
            <a href="shop.php" class="btn">shop now</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="about-us">
    <div class="box-container">
      <div class="img-box"></div>
      <div class="box">
        <div class="heading">
          <span>why choose us</span>
          <h1>why Rimberio indian fashion store</h1>
          <img src="image/separator.png" alt="">
        </div>
        <p>Choosing Rimberio Means Picking A Mix Of Style, Quality, And Good Prices. Our Carefully Selected Collections
          Help You Stay Fashionable, And Our Great Customer Service Makes Shopping Easy. We Focus On Using High-quality
          Materials And Good Workmanship, So You Can Shop With Confidence. Our Website Is Easy To Use For Buying, And
          Our Helpful Support Team Is Always Available To Assist You. With Rimberio, You're Not Just Buying Clothes;
          You're Enjoying A Shopping Experience Made For You.</p>
        <a href="about.php" class="btn">know more</a>
        <a href="contact.php" class="btn">contact us</a>
      </div>
    </div>
  </div>

  <!-- <div class="sub-banner">
    <div class="box-container">
      <img src="image/sub-banner1.jpg" alt="">
      <img src="image/sub-banner.jpg" height="85%">
    </div>
  </div> -->

  <!-- <div class="categories">
    <div class="heading">
      <h1>shop by categories</h1>
    </div>

    <div class="box-container">
      <div class="box">
        <img src="image/cat.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat0.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat1.png" alt="">
      </div>

      <div class="box">
        <img src="image/cat2.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat3.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat4.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat5.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat6.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat7.webp" alt="">
      </div>

      <div class="box">
        <img src="image/cat8.avif" alt="">
      </div>
    </div>
  </div> -->

  <!-- <div class="sub-banner">
    <img src="image/sub-banner2.jpg" alt="">
    <img src="image/sub-banner3.jpg" style="margin-top: -.4rem;">
  </div> -->

  <div class="frame-container-2">
    <div class="frame">
      <div class="detail">
        <span>shop seasonal</span>
        <h2>50% off</h2>
        <h1>all seasonl fashion</h1>
        <a href="shop.php" class="btn">shop now</a>
      </div>
    </div>

    <div class="box">
      <img src="image/sub-banner4.jpg" alt="">
    </div>
  </div>

  <!-- <div class="sub-banner">
    <img src="image/sub-banner5.jpg" alt="">
  </div> -->

  <div class="gurantee">
    <div class="heading">
      <h1>our guarantee</h1>
      <p>We guarantee the highest quality and customer satisfaction with every product you purchase

      </p>
      <img src="image/separator.png" alt="">
    </div>

    <div class="box-container con">
      <img src="image/sale3.webp">
      <img src="image/sale4.jpg">
      <img src="image/sale7.jpg">
      <img src="image/sale6.jpg">
    </div>
  </div>

  <div class="offer-1">
    <div class="detail">
      <h1>special discount for all <br> latest fashion products</h1>
      <p>We are offering a special discount on all the latest fashion products! Now, you can grab the best deals on our
        newest collections with amazing discounts. Don’t miss out on this opportunity, as our freshest and trendiest
        fashion items are available at unbeatable prices. With the finest styles and quality, you can now get your
        favorite outfits at incredibly affordable prices. So, hurry and visit our rimberio cloth fashion website today
        to take advantage of this special offer and upgrade your wardrobe with the latest looks!</p>

      <div class="container">
        <div id="countdown" style="color: #fff;">
          <ul>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>minutes</li>
            <li><span id="seconds"></span>seconds</li>
          </ul>
        </div>

        <a href="shop.php" class="btn">shop now</a>
      </div>
    </div>
  </div>

  <div class="product">
    <div class="heading">
      <h1>our latest collection</h1>
    </div>
    <?php include 'components/homeshop.php' ?>
  </div>

  <!-- <div class="offer-2">
    <div class="detail">
      <h1>We Pride Ourselves On <br> Exceptional Fashion Design</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum in aliquid necessitatibus laboriosam magnam rerum
        itaque voluptatum, dolores incidunt dignissimos consequatur minus nam totam? Error voluptas cumque fuga
        exercitationem repudiandae est minima, laborum velit odio earum? Quia impedit ipsam odio cupiditate, non laborum
        adipisci quo quisquam eius deserunt atque et voluptatibus minima fugiat </p>

      <a href="shop.php" class="btn">shop now</a>
    </div>
  </div> -->

  <div class="gurantee">
    <div class="heading">
      <h1>our guarantee</h1>
      <p>We guarantee the highest quality and customer satisfaction with every product you purchase</p>
      <img src="image/separator.png" alt="">
    </div>

    <div class="box-container con">
      <img src="image/sale.webp">
      <img src="image/sale0.webp">
      <img src="image/sale1.webp">
      <img src="image/sale2.webp">
    </div>
  </div>






  <?php
  include 'components/user_footer.php';
  ?>

  <!-- sweetalert cdn link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <!-- custom js link  -->
  <script src="jquary.js"></script>
  <script src="slick.js"></script>

  <script type="text/javascript" src="script.js"> </script>
  <!-- alert  -->
  <?php include 'components/alert.php';
  ?>
</body>

</html>