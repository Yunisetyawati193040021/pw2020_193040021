<?php

require 'php/functions.php';

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $barang = query("SELECT * FROM elektronik WHERE
                    nama LIKE '%$search%' OR
                    warna LIKE '%$search%' OR
                    stok LIKE '%$search%' OR
                    harga LIKE '%$search%' ");
} else {
  $barang = query("SELECT * FROM elektronik");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>index tubes</title>
</head>

<body>
  <H2>
    <marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">LIST BARANG ELECTRONIC</marquee>
  </H2>
  <nav>
    <div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input name="search" id="search" type="search" placeholder="masukan keyword pencarian.." required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        </div>
      </form>
    </div>
  </nav>
  <br>

  <center><a href="php/login.php">
      <button>Masuk ke halaman admin</button>
    </a></center>
  <br>

  <div class="container">
    <?php if (empty($barang)) : ?>
      <h1 style="color: red; font-style: italic;">Data tidak ditemukan!</h1>
    <?php else : ?>
      <?php foreach ($barang as $e) : ?>
        <div class="row">
          <div class="col s12 m6">
            <div class="card #ffd180 orange accent-1">
              <div class="card-content white-text">
                <span class="card-image">
                  <img src="assets/img/<?= $e["foto"] ?>">
                </span>
                <br>
                <p><?= $e["nama"] ?></p>
              </div>
              <div class="card-action #ff5722 deep-orange">
                <a href="php/detail.php?id=<?= $e['id'] ?>">This is a link</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

</body>

</html>