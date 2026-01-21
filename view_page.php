
<?php
include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
  $user_id = $_COOKIE['user_id'];
} else {
  $user_id = '';
}

$pid = $_GET['pid'];

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
  <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
  <title>Rimberio Indian Fashion Website Template</title>
</head>

<body>
  <?php include 'components/user_header.php'; ?>

  <div class="banner">
    <div class="detail">
      <h1>product description</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, sit enim provident doloremq<br>
        itaque placeat alias quia aspernatur ullam temporibus. Quia voluptates recusandae est saepe, placeat</p>
      <span><a href="dashboard.php">home</a><i class="bx bx-right-arrow-alt"></i>product description</span>
    </div>

  </div>
  <div class="line2"></div>

  <div class="heading">
    <span>product description</span>
    <h1>we are passionate about making beautiful more beautiful</h1>
    <img src="image/separator.png">
  </div>

  <div class="view_page">
    <?php
    if (isset($_GET['pid'])) {
      $pid = $_GET['pid'];
      $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = '$pid'");
      $select_product->execute();

      if ($select_product->rowCount() > 0) {
        while ($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)) {

          ?>

    <form action="" method="post" class="box">
      <div class="product_Slider">
        <div>
          <img id="featuredImage" class="Slider-featuredImage" src="uploaded_files/<?= $fetch_product['thumb_one']; ?>">
        </div>
        <div class="Slider-thumbnails">
          <a href="uploaded_files/<?= $fetch_product['thumb_one']; ?>" class="Slider-thumbnail active">
            <img src="uploaded_files/<?= $fetch_product['thumb_one']; ?>">
          </a>

          <a href="uploaded_files/<?= $fetch_product['thumb_two']; ?>" class="Slider-thumbnail">
            <img src="uploaded_files/<?= $fetch_product['thumb_two']; ?>">
          </a>


          <a href="uploaded_files/<?= $fetch_product['thumb_three']; ?>" class="Slider-thumbnail">
            <img src="uploaded_files/<?= $fetch_product['thumb_three']; ?>">
          </a>
        </div>
      </div>

      <div class="detail">
        <?php if ($fetch_product['stock'] > 9) { ?>
        <span class="stock" style="color:green;">in stock</span>
        <?php } elseif ($fetch_product['stock'] == 0) { ?>
        <span class="stock" style="color:red;">out of stock</span>

        <?php } else { ?>
        <span class="stock" style="color:red;">hurry only <?= $fetch_product['stock']; ?></span>
        <?php } ?>
        <p class="price">₹<?= $fetch_product['price']; ?></p>
        <div class="name"><?= $fetch_product['name']; ?> </div>

        <input type="hidden" name="product_id" value="<?= $fetch_product['id']; ?>">

        <div class="button">
          <button type="submit" name="add_to_wishlist" class="btn">add to wishlist <i class="bx bx-heart"></i></button>
          <input type="hidden" name="qty" required min="1" max="99" maxlength="2" class="qty">

          <button type="submit" name="add_to_cart" class="btn">add to cart <i class="bx bx-cart"></i></button>
        </div>
      </div>

    </form>
    <?php
        }
      }
    } else {
      echo '
          <div class="empty">
            <p>no product added yet!</p>
          </div>
        ';
    }

    ?>
  </div>

  <div class="products">
    <div class="heading">
      <h1>similar products</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet vero doloremque blanditiis quibusdam veniam
        voluptas repellendus deleniti voluptatum et quam?</p>
      <img src="image/separator.png">
    </div>
    <?php include 'components/homeshop.php'; ?>
    <div class="more">
      <a href="shop.php" class="btn">load more</a>
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