<?php
include "header.php";
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login seite</title>
</head>

<body class="bg_image">
  <!--User Code-->
  <div class="wrapper fadeInDown container">
    <div id="formContent" class="row">
      <!-- Tabs Titles -->
      <div>
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="images/user.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="welcome.php" method="post">
          <input type="email" id="login" class="fadeIn second" name="email" placeholder="Username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="LogIn" name="login">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- User code ended -->
  <?php
  include "footer.php";
  ?>
  <script src="Js/updateCart.js"></script>
</body>

</html>