<?php
// Koneksi ke DB & Pilih  Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040021');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data kedalam array 
//$row = mysqli_fetch_row($result); // array numerik
//$row = mysqli_fetch_assoc($result); // array associativer
//$row = mysqli_fetch_array($result); // keduanya

while ($row = mysqli_fetch_assoc($result))


// tampung ke variabel mahasiswa

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="img/yuni.JPG" width="60"></td>
      <td>193040021</td>
      <td>Yuni Setyawati</td>
      <td>yunisetyawati@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  </table>
</body>

</html>