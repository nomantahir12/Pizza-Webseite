<?php
include "header.php";
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Warenkorb</title>
</head>

<body>

  <div class="container table-outer-div">
    <div class="row cont">
      <div class="inner-div">
        <h2 class="cart-header">Ihr Warenkorb</h2>
        <hr style="color: green; background-color: grey; height: 1.5px; border: none;">
        <div class="cart-body">

        </div>
        <hr class="bottom-line" style="color: green; background-color: grey; height: 1.5px; border: none;">
        <button id="id-kasse" type="button" class="btn btn-primary btn-kasse">Zur Kasse</button>
      </div>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>
<script src="Js/updateCart_02.js"></script>
<script src="Js/add-to-cart.js"></script>
</body>

</html>