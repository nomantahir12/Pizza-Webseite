<?php


require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (trim($_POST["username"]) == null) {
    $username_err = "Username cannot be blank";
    // echo ($username_err);
  } else {
    $sql = "SELECT user_id FROM register WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username = trim($_POST['username']);

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {

          $username_err = "This username is already taken";
          // echo ("HELLO USER");
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    } else {
      echo "Something went wrong 2";
    }
  }
  // mysqli_stmt_close($stmt);
  // echo ("after username is checked");
  if (trim($_POST["password"]) == null) {
    $password_err = "Password cannot be blank internal";
    echo ($password_err);
  } else if (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
    echo ($password_err);
  } else {
    $password = trim($_POST['password']);
    // echo ($password);
  }

  // echo ($password +"external");
// echo ($password_err+ "external");

  if (($username_err == null) && ($password_err == null)) {
    $sql = "INSERT INTO register (username, password, email, address, city, postalcode) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "sssssi", $param_username, $param_password, $email, $address, $city, $postalcode);

      // set parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $postalcode = $_POST['postalcode'];

      // try to execute the querry
      if (mysqli_stmt_execute($stmt)) {   

        // header("location: login.php");
        echo '<script src="Js/success-registered.js"></script>';
        echo "Hello";
        echo '<script>window.location.href = "login.php";</script>';
        
      

        exit;
      } else {
        echo "Something went wrong...cannot redirect!";
      }
    }

    mysqli_stmt_close($stmt);
  } else {
    echo ($password_err);
    echo ($username_err);
  }
  mysqli_close($conn);
}
include "header.php";
?>




<!-- <!doctype html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>
</head>

<body class="r-background">

  <!-- Form -->

  <div id="success" class="alert alert-success" role="alert" style="display:none">
    <strong>Success!</strong> Your account has been created
  </div>
  <div class="container r-cont mt-5 col-lg-6 col-md-7 col-sm-6 col-10"
    style="padding:40px 20px; border: 0.5px solid gray; margin-bottom: 250px">
    <h2 style="font-weight:bold">Hier Anmelden:</h2>
    <hr>
    <form class="row" action="" method="post">
      <div class="form-row col-md-">
        <div class="form-group col-md-6">
          <input type="email" class="form-control" id="inputEmail4" placeholder="Please enter your email address"
            name="email" required>
        </div>
        <div class="form-group col-md-6">
          <input style="margin-right:0px!important" type="password" class="form-control" id="inputPassword4"
            placeholder="Password" name="password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Benutzername</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Username" name="username" required>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Addresse</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
          name="address" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Stadt</label>
          <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Postleitzahl</label>
          <input type="text" class="form-control" id="inputZip" name="postalcode" required>
        </div>
      </div>
      <button type="submit" class="btn btn-primary fs-7 col-4 btn-signup">Sign Up</button>
    </form>
  </div>


  <!-- Form -->
  <?php
  include "footer.php";
  ?>
  <script src="Js/updateCart.js"></script>
  
</body>

</html>


  <!-- <script src="Js/success-registered.js"></script> -->
  