<?php
include 'components/connect.php';


if (isset($_COOKIE['user_id'])) {
  $user_id = $_COOKIE['user_id'];
} else {
  $user_id = '';
}

if (isset($_POST['send_message'])) {
  if ($user_id != '') {
    $id = unique_id();

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $subject = $_POST['subject'];
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);

    $message = $_POST['message'];
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ?  AND message = ?");
    $verify_message->execute([$user_id, $name, $email, $subject, $message]);

    if ($verify_message->rowCount() > 0) {
      $warning_msg[] = 'message already send';
    } else {
      $insert_message = $conn->prepare("INSERT INTO `message` (id, user_id, name, email, subject, message) VALUES(?,?,?,?,?,?)");
      $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);

      $success_msg[] = 'message send';
    }
  } else {
    $$warning_msg[] = 'please login first';
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
  <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
  <title>Rimberio Indian Fashion Website Template</title>
</head>

<body>
  <?php include 'components/user_header.php'; ?>

  <div class="banner">
    <div class="detail">
      <h1>contact us</h1>
      <p>We would love to hear from you! Whether you have a question, need assistance <br> with an order, or just want
        to
        share
        feedback, our team is here to help</p>
      <span><a href="dashboard.php">home</a><i class="bx bx-right-arrow-alt"></i>contact us</span>
    </div>

  </div>
  <div class="line2"></div>

  <div class="service">
    <div class="heading">
      <h1>our services</h1>
      <p>We offer swift and secure delivery, ensuring your orders reach you in perfect condition and on time. </p>
      <img src="image/separator.png">
    </div>
    <div class="box-container">
      <div class="box">
        <img src="image/delivery.png">
        <div>
          <h1>free shipping fast</h1>
          <p>Enjoy free and fast shipping on all your orders! At Rimberio, we ensure your favorite styles reach you
            quickly and hassle-free. Shop now and experience speedy delivery to your doorstep. 😊</p>
        </div>
      </div>

      <div class="box">
        <img src="image/return.png">
        <div>
          <h1>mony back guarentee</h1>
          <p>Shop with confidence at Rimberio! If you’re not completely satisfied with your purchase, we offer a 100%
            money-back guarantee. Hassle-free returns and refunds—your satisfaction is our priority. 😊</p>
        </div>
      </div>

      <div class="box">
        <img src="image/discount.png">
        <div>
          <h1>online support 24/7</h1>
          <p>We’re here for you anytime, anywhere! Rimberio offers 24/7 online support to assist you with your orders,
            inquiries, and more. Whether it’s day or night, our team is just a message away! 😊</p>
        </div>
      </div>
    </div>
  </div>

  <div class="contact">
    <div class="heading">
      <h1>droap a line</h1>
      <p>Rimberio: Style, comfort, and support—24/7, just for you.</p>
      <img src="image/separator.png">
    </div>
    <div class="box-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58453.77532161945!2d72.46857936285728!3d23.698800698202053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c4fe0be5bfbab%3A0xfc8dd1ffd166b43b!2sVisnagar%2C%20Gujarat%20384315!5e0!3m2!1sen!2sin!4v1736438659368!5m2!1sen!2sin"
        width="92%" height="820px" style="border:0; margin: 1.5rem;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

      <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776869.4827869595!2d71.32697210000003!3d22.415882449999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1728191342145!5m2!1sen!2sin"
        width="92%" height="820px" style="border:0; margin: 1.5rem;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      <div class="form-container">
        <form action="" method="post" class="login">
          <div class="input-field">
            <p>your name <span>*</span></p>
            <input type="text" name="name" placeholder="enter your name" class="box" maxlength="50">
          </div>
          <div class="input-field">
            <p>your email <span>*</span></p>
            <input type="email" name="email" placeholder="enter your email" class="box" maxlength="50">
          </div>

          <div class="input-field">
            <p>subject <span>*</span></p>
            <input type="text" name="subject" placeholder="enter your reason" class="box" maxlength="50" required>
          </div>
          <div class="input-field">
            <p>message <span>*</span></p>
            <textarea class="box" name="message"></textarea>

          </div>
          <button type="submit" name="send_message" class="btn">send message</button>
        </form>
      </div>
    </div>
  </div>

  <div class="address">
    <div class="heading">
      <h1>our contact details</h1>
      <p>We would love to hear from you! Whether you have a question, need assistance with an order, or just want to
        share
        feedback, our team is here to help.</p>
      <img src="image/separator.png">
    </div>
    <div class="box-container">
      <div class="box">
        <i class="bx bxs-map-alt"></i>
        <div>
          <h4>address</h4>
          <p>VISNAGAR, <br> KAMANA - X , RIMBERIO CLOTH COMPNY</p>
        </div>
      </div>

      <div class="box">
        <i class="bx bxs-phone-incoming"></i>
        <div>
          <h4>phone number</h4>
          <p>+91 9724610429</p>
          <p>+91 6356450110</p>
        </div>
      </div>

      <div class="box">
        <i class="bx bxs-envelope"></i>
        <div>
          <h4>email</h4>
          <p>support@Rimberio.com</p>
          <p>www.Rimberio.com</p>
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