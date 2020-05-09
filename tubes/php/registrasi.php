<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
          </script>";
  }
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
  <link rel="stylesheet" type="text/css" href="../css/registrasi.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi</title>
</head>

<body>
  <form action="" method="POST">
    <table>
      <tr>
        <td><label for="username">username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td><label for="password">password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
      </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
  </form>
</body>

</html>