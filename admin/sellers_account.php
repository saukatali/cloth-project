<?php
include '../components/connect.php';


if (isset($_COOKIE['seller_id'])) {
  $seller_id = $_COOKIE['seller_id'];
} else {
  $seller_id = '';
  header('location:login.php');
}

if (isset($_POST['delete'])) {

  $delete_id = $_POST['delete_id'];
  $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

  $verify_delete = $conn->prepare("SELECT * FROM `message` WHERE id = ?");
  $verify_delete->execute([$delete_id]);

  if ($verify_delete->rowCount() > 0) {
    $delete_msg = $conn->prepare("DELETE FROM `message` WHERE id = ?");
    $delete_msg->execute([$delete_id]);

    $success_msg[] = 'message deleted';
  } else {
    $warning_msg[] = 'message already deleted';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- box icon cdn link  -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo time(); ?>">
  <title>Rimberio Indian Fashion Website Template</title>
</head>

<body>

  <?php include '../components/admin_header.php'; ?>

  <div class="banner">
    <div class="detail">
      <h1>registered sellers</h1>
      <p>Welcome to your Seller Profile! Manage your listings, track sales, view customer feedback, <br>and update your
        store information all in one place. Keep your profile updated to provide <br>the best shopping experience for
        your
        customers!</p>
      <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>registered sellers</span>
    </div>
  </div>

  <div class="line2"></div>

  <div class="user-container">
    <div class="heading">
      <h1>registered sellers</h1>
      <img src="../image/separator.png" alt="">
    </div>
    <div class="box-container">
      <?php
      $select_sellers = $conn->prepare("SELECT * FROM `sellers`");
      $select_sellers->execute();

      if ($select_sellers->rowCount() > 0) {
        while ($fetch_sellers = $select_sellers->fetch(PDO::FETCH_ASSOC)) {




          ?>
      <div class="box">
        <img src="../uploaded_files/<?= $fetch_sellers['image']; ?>">

        <div class="detail">
          <p>seller id : <?= $fetch_sellers['id']; ?></p>
          <p>seller name : <?= $fetch_sellers['name']; ?></p>
          <p>seller email : <?= $fetch_sellers['email']; ?></p>
        </div>
      </div>

      <?php
        }
      } else {
        echo '
            <div class="empty">
              <p>no sellers registered yet!</p>
            </div>
          ';
      }
      ?>
    </div>
  </div>



  <?php include '../components/admin_footer.php'; ?>

  <!-- sweetalert cdn link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script type="text/javascript" src="../js/admin_script.js"> </script>
  <!-- alert  -->
  <?php include '../components/alert.php';
  ?>
</body>

</html>