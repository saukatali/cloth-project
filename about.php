<?php
include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
  $user_id = $_COOKIE['user_id'];
} else {
  $user_id = '';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- box icon cdn link  -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
  <title>Rimberio Indian Fashion Website Template</title>
</head>

<body>
  <?php include 'components/user_header.php'; ?>

  <div class="banner">
    <div class="detail">
      <h1>about us</h1>
      <p>Welcome to my clothing, where style meets comfort.<br>
        We are passionate about creating clothing that not only looks great but also feels amazing to wear</p>
      <span><a href="dashboard.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
    </div>

  </div>
  <div class="line2"></div>

  <div class="who">
    <div class="box-container">
      <div class="box">
        <div class="heading">
          <span>who we are</span>
          <h1>We are passionate about making beautiful more beautiful</h1>
          <img src="image/separator.png">
        </div>
        <p>"We are dedicated to taking fashion to new heights."
          "Our mission is to bring out the beauty within you."
          "We proudly celebrate your uniqueness."
          "We are inspired to design artistic and comfortable clothing for you."
          "We help turn your dreams into reality."</p>
        <div class="flex-btn">
          <a href="shop.php" class="btn"> explore our shop</a>
          <a href="shop.php" class="btn"> visit our shop</a>
        </div>
      </div>
      <div class="img-box">
        <img src="image/home.jpg" class="img">
        <img src="image/mask.png" class="shap">
      </div>
    </div>
  </div>

  <div class="exclusive">
    <div class="detail">
      <h1>exclusive collection <br> summer collection 2024</h1>
      <p>Feel the summer mood with our latest exclusive cloth collection <br> featuring bright color and hand-painted
        ornaments</p>
      <a href="shop.php" class="btn">shop now</a>
    </div>
  </div>

  <div class="cms-banner">
    <div class="box-container">
      <div class="box">
        <img src="image/cms-banner.avif">
        <div class="detail">
          <span>get upto 35% discount</span>
          <h1>on kid's <br> collection</h1>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>

      <div class="box">
        <img src="image/cms-banner.jpg">
        <div class="detail">
          <span>flat 15% discount</span>
          <h1>on men's <br> collection</h1>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="story">
    <div class="box">
      <div class="heading">
        <span style="color: red; text-transform: uppercase; padding-bottom: .5rem;">fresh & latest collection</span>
        <h1>Discount up to 30% for your <br> first purchase.</h1>
        <p style="color: red; text-transform: uppercase; padding-bottom: .5rem;">get 20% off</p>
        <p>"Don't miss out on our newest arrivals—shop the latest trends now!"
          "Flat 25% off on selected items—grab them before they're gone!"
          "Limited-time offer: Get up to 40% off on our bestsellers!"
          "Shop today and enjoy an additional 15% off your purchase."
          "Upgrade your wardrobe with fresh styles—exclusive discounts await!"
          "First-time shoppers get a special 30% discount. Shop now!"
          "Flash sale: 20% off for the next 24 hours only!"
          "Step into style with our latest collection—now at unbeatable prices!"
          "Hurry! Get up to 50% off on end-of-season clearance."
          "Shop the look you love and save big with our exciting offers!".</p>
        <a href="shop.php" class="btn">our services</a>
      </div>
    </div>
  </div>

  <div class="team">
    <div class="heading">
      <span>our team</span>
      <h1>Quality & Passion with our Services!</h1>
      <img src="image/separator.png">
    </div>

    <div class="box-container">
      <div class="box">
        <img src="image/team.jpg" class="img">
        <div class="content">
          <h2>fiona edwards</h2>
          <p>fashion designer</p>
          <div class="icons">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram-alt"></i>
            <i class="bx bxl-linkedin"></i>
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-pinterest-alt"></i>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="image/team0.jpg" class="img">
        <div class="content">
          <h2>ralf johnson</h2>
          <p>Textile designer</p>
          <div class="icons">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram-alt"></i>
            <i class="bx bxl-linkedin"></i>
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-pinterest-alt"></i>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="image/team1.jpg" class="img">
        <div class="content">
          <h2>fiona edwards</h2>
          <p>Costume designer</p>
          <div class="icons">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram-alt"></i>
            <i class="bx bxl-linkedin"></i>
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-pinterest-alt"></i>
          </div>
        </div>
      </div>

      <div class="box">
        <img src="image/team2.jpg" class="img">
        <div class="content">
          <h2>fiona edwards</h2>
          <p>Pattern Makers</p>
          <div class="icons">
            <i class="bx bxl-facebook"></i>
            <i class="bx bxl-instagram-alt"></i>
            <i class="bx bxl-linkedin"></i>
            <i class="bx bxl-twitter"></i>
            <i class="bx bxl-pinterest-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="box-container">
      <div class="box">
        <div class="heading">
          <span>about company</span>
          <h1 style="color:#fff">latest & trendy Fashion <br> Provider website</h1>
          <p style="color:#000">"Welcome to my rimberio, where we bring you the freshest and trendiest fashion to keep
            you ahead of
            the style curve."
            "At rimberio, we're passionate about providing you with the latest fashion trends, ensuring you
            look stylish no matter the occasion."
            "Our collection is designed to offer the most fashionable, high-quality pieces that reflect the
            ever-evolving world of fashion."
            "From chic casuals to statement pieces, we are your go-to destination for the trendiest clothing that
            matches your unique style."
            "Stay ahead of the trends with [Your Company Name]—where we offer the best of modern fashion with a focus on
            comfort, quality, and style."
            "Our mission is simple: to bring you the latest fashion at unbeatable prices, making sure you always stay on
            top of the fashion game."</p>
          <div class="flex-btn">
            <a href="shop.php" class="btn">explore products</a>
            <a href="contact.php" class="btn">any query contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="choose">
    <div class="box-container">
      <div class="img-box">
        <img src="image/project0.jpg" class="img">
      </div>
      <div class="box">
        <div class="heading">
          <span>why choose us</span>
          <h1>Special Care For Our Every <br> Fashion Lovers</h1>
        </div>
        <div class="box-detail">
          <div class="detail">
            <img src="image/discount.png">
            <h2>discount options</h2>
            <p>Enjoy up to 50% off on select items during our seasonal sale!</p>
            <span>1</span>
          </div>
          <div class="detail">
            <img src="image/gift.png">
            <h2>gift offers</h2>
            <p>i have the gift of choice! Purchase a gift card for your loved ones..</p>
            <span>2</span>
          </div>
          <div class="detail">
            <img src="image/return.png">
            <h2>best return policy</h2>
            <p>We offer free returns on all orders within the return window.</p>
            <span>3</span>
          </div>
          <div class="detail">
            <img src="image/support.png">
            <h2>online support</h2>
            <p> chat with us live on the website. Our team is available 24/7 to provide you
              with quick responses.</p>
            <span>4</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="project">
    <div class="box-container">
      <div class="box">
        <p>"Discover the story behind our brand and how we create fashionable yet comfortable clothing for every
          occasion."
        </p>
        <img src="image/head.png">
        <p>Learn more about our design philosophy, the craftsmanship, and the quality materials we use to make each
          piece unique."
          "Explore the inspiration behind our collections and how we stay ahead of the trends to bring you the latest
          styles."</p>
        <a class="btn">learn more</a>
      </div>
      <div class="card"></div>
    </div>
  </div>

  <div class="mission">
    <div class="box-container">
      <div class="box">
        <div class="heading">
          <span>our mission</span>
          <h1>latest fashion with big smile</h1>
          <img src="image/separator.png">
        </div>
        <div class="detail">
          <div class="img-box">
            <img src="image/fashion.png" alt="">
          </div>
          <div>
            <h2>latest fashion</h2>
            <p>Step into the future of fashion with our latest collection, where every piece is designed to turn heads.
            </p>
          </div>
        </div>

        <div class="detail">
          <div class="img-box">
            <img src="image/delivery.png" alt="">
          </div>
          <div>
            <h2>delivery in 24 hours</h2>
            <p>Need it fast? We offer 24-hour delivery on all orders—because we know you can’t wait!</p>
          </div>
        </div>

        <div class="detail">
          <div class="img-box">
            <img src="image/app.png" alt="">
          </div>
          <div>
            <h2>order online</h2>
            <p>Ordering online is easy! Choose your styles and have them delivered straight to your door.</p>
          </div>
        </div>

        <div class="detail">
          <div class="img-box">
            <img src="image/support.png" alt="">
          </div>
          <div>
            <h2>24/7 support</h2>
            <p>We’re just a message away! Our 24/7 support ensures you get assistance whenever you need it.</p>
          </div>
        </div>
      </div>

      <div class="box-img"></div>
    </div>
  </div>

  <div class="about-banner">
    <div class="box-container">
      <div class="box">
        <img src="image/about-banner.jpg" alt="">
        <div class="detail">
          <span>shop seasonal</span>
          <h2>50% off</h2>
          <h1>all seasonal women's fashion</h1>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>
      <div class="box">
        <img src="image/about-banner0.jpg" alt="">
        <div class="detail">
          <span>shop seasonal</span>
          <h2>70% off</h2>
          <h1>all seasonal kid's fashion</h1>
          <a href="shop.php" class="btn">shop now</a>
        </div>
      </div>
    </div>
  </div>






  <?php include 'components/user_footer.php'; ?>
  <!-- sweetalert cdn link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/user_script.js"> </script>

  <!-- alert  -->
  <?php include 'components/alert.php'; ?>

</body>

</html>