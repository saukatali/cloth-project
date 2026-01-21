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
      <h1>registered users</h1>
      <p>Manage all your registered users in one place! View user profiles, track activity, <br>manage permissions, and
        analyze customer data to enhance their shopping experience. <br>Stay connected with your loyal customers
        effortlessly.</p>
      <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>registered users</span>
    </div>
  </div>

  <div class="line2"></div>

  <div class="user-container">
    <div class="heading">
      <h1>registered users</h1>
      <img src="../image/separator.png" alt="">
    </div>
    <div class="box-container">
      <?php
      $select_users = $conn->prepare("SELECT * FROM `users`");
      $select_users->execute();

      if ($select_users->rowCount() > 0) {
        while ($fetch_users = $select_users->fetch(PDO::FETCH_ASSOC)) {

          ?>

          <div class="box">
            <img src="../uploaded_files/<?= $fetch_users['image']; ?>">

            <div class="detail">
              <p>User id : <?= $fetch_users['id']; ?></p>
              <p>User name : <?= $fetch_users['name']; ?></p>
              <p>User email : <?= $fetch_users['email']; ?></p>
            </div>
          </div>
          <?php
        }
      } else {
        echo '
            <div class="empty">
              <p>no user registered yet!</p>
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