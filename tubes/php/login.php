<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
// melakukan pengecekam apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencoba USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 + 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 + 60 * 24);
      }
      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="../css/login.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body class="#f3e5f5 purple lighten-5">
  <form action="" method="POST">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password</p>
    <?php endif; ?>
    <div class="container" style="position: absolute; left: 200px;">
      <div class="col s12 m7">
        <h4 class="center"><img src="../assets/img/login.PNG" alt="silahkan login"></h4>
        <div class="card horizontal">
          <div class="card-image">
            <img src="../assets/img/lv.PNG">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
              </tr>
              <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="text" name="password"></td>
              </tr>
              <br>
              <p>
                <label>
                  <input type="checkbox" />
                  <span>Remember Me</span>
                </label>
              </p>
  </form>
  </div>
  <div class="card-action">
    <center>
      <button class="btn waves-effect" type="submit" name="submit"><i class="material-icons right">send</i>Login</button>
    </center>
    <div class="registrasi">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
    <a href="https://www.instagram.com"><img src="../assets/img/ig.PNG"></a>
    <a href="https://www.facebook.com"><img src="../assets/img/fb.PNG"></a>
    <a href="https://mail.google.com"><img src="../assets/img/gmail.PNG"></a>
  </div>
  </div>
  </div>
</body>

</html>