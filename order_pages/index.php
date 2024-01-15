<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Purchesing</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="product-container">
    <div class="image">
      <?php
      $img = isset($_GET['img']) ? $_GET['img'] : '';
      echo '<img src="../landing_pages/assets/' . htmlspecialchars($img) . '" alt="coffee">';
      ?>
    </div>
    <div class="details">
      <?php
      $cost = isset($_GET['coffeePrice']) ? $_GET['coffeePrice'] : '';
      $title = isset($_GET['coffeeName']) ? $_GET['coffeeName'] : '';

      echo '<h1 class="cost">$' . htmlspecialchars($cost) . '</h1>';
      echo '<h3 class="title">' . htmlspecialchars($title) . '</h3>';
      ?>
    </div>
  </div>

  <div class="card-container">
    <div class="mastercard">
      <div class="logo"></div>
      <div class="name">mastercard</div>
    </div>
    <div class="card-details">
      <form action="../order_pages/insert.php" method="post">
        <div class="card-number field">
          <label for="cn">Customer Name</label>
          <input id="cn" type="text" name="nama_pelanggan">
        </div>
        <div class="card-name field">
          <label for="cna"></label>
          <input id="cna" type="text" name="card_pin">
        </div>
        <input type="hidden" name="jenis_kopi" value="<?php echo htmlspecialchars($title); ?>">
        <input type="hidden" name="harga_kopi" value="<?php echo htmlspecialchars($cost); ?>">
        <input type="hidden" name="tanggal_pemesanan" value="<?php echo date("Y-m-d"); ?>">
        <input type="hidden" name="jenis_pembelian" value="Online">
        <button type="submit" class="purchase-button" data-content="PURCHASE">PURCHASE</button>
      </form>
    </div>
  </div>
</body>

</html>