<?php
include "header.php";
?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Speisekarte</title>
</head>

<body class="bg-speisekarte">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="speisekarte_header fs">SPEISEKARTE</h2>
        <!-- <img class="speisekarte_img col" src="images/speisekarte_03.jpg" alt="image"> -->
        <h2 class="fs-5 fs-sm-5" id="head" style="color:white" onclick="toggleList()">> VORSPEISEN</h2>
        <ul class="speisekarte_list" id="abc" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', 4.50)">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', 4.50)">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', 5.00)">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', 5.00)">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', 2.00)">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', 3.00)">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-5" id="head_01" style="color:white" onclick="toggleList_01()">> SALATE</h2>
        <ul class="speisekarte_list" id="abc_01" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', 4.50 )">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', 4.50 )">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-5" id="head_02" style="color:white" onclick="toggleList_02()">> NUDELGERICHTE</h2>
        <ul class="speisekarte_list" id="abc_02" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-6" id="head_03" style="color:white" onclick="toggleList_03()">> IM OFFEN ÜBERBACKEN MIT
          KÄSE</h2>
        <ul class="speisekarte_list" id="abc_03" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-6" id="head_04" style="color:white" onclick="toggleList_04()">> PIZZA</h2>
        <ul class="speisekarte_list" id="abc_04" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-5" id="head_05" style="color:white" onclick="toggleList_05()">> VERSCHIEDENES</h2>
        <ul class="speisekarte_list" id="abc_05" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-6 custom-font" id="head_06" style="color:white" onclick="toggleList_06()">>
          FLEISCHGERICHTE SCHWEINE- ODER PUTENFLEISCH</h2>
        <ul class="speisekarte_list" id="abc_06" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-5" id="head_07" style="color:white" onclick="toggleList_07()">> GETRÄNKE</h2>
        <ul class="speisekarte_list" id="abc_07" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
        <h2 class="fs-5 fs-sm-5" id="head_08" style="color:white" onclick="toggleList_08()">> OTHERS</h2>
        <ul class="speisekarte_list" id="abc_08" style="display: none">
          <li onclick="add_to_cart(1, 'Toast Hawaii', '4,50')">
            <h2>Toast Hawaii</h2>
            <p>mit Ananas, Schinken *u.Käse überbacken</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(2, 'Toast', '4,50')">
            <h2>Toast</h2>
            <p>mit käse, salami, brot</p> <span> 4,50 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(3, 'Frühlingsrollen', '5,00')">
            <h2>Frühlingsrollen</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(4, 'Mozzalella Sticks', '5,00')">
            <h2>Mozzalella Sticks</h2>
            <p>mit käse, salami, brot</p> <span> 5,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(5, 'Pizzabrot', '2,00')">
            <h2>Pizzabrot</h2>
            <p>mit käse, salami, brot</p> <span> 2,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
          <li onclick="add_to_cart(6, 'Pommes', '3,00')">
            <h2>Pommes</h2>
            <p>mit käse, salami, brot</p> <span> 3,00 € </span>
          </li>
          <hr style="color: green; background-color: #ffc107; height: 3px; border: none;">
        </ul>
      </div>
    </div>
  </div>




  <?php
  include "footer.php";
  ?>
  <script src="Js/add-to-cart.js"></script>
  <script src="Js/updateCart.js"></script>
</body>

</html>