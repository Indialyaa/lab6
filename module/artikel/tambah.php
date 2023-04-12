<?php require('header.php'); ?>
<?php
error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $sql = "INSERT INTO form_input (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')";
  $result = mysqli_query($koneksi, $sql);
  if (!$result) {
    die("Gagal menambahkan data: " . mysqli_error($koneksi));
  } else {
    $success_message = "Data berhasil disimpan.";
  }
}

$sql = "SELECT * FROM db_name";
$result = mysqli_query($koneksi, $sql);
if (!$result) {
  die("Gagal mengambil data: " . mysqli_error($koneksi));
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <title>Tambah Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h1>Silahkan Tambah Mahasiswa</h1>
    <div class="main">
      <?php if (isset($success_message)) { ?>
        <div class="success">
          <?php echo $success_message; ?>
        </div>
      <?php } ?>
      <form method="post" action="tambah.php">
        <div class="input">
          <label>NIM</label>
          <input type="text" name="nim" />
        </div>
        <div class="input">
          <label>Nama</label>
          <input type="text" name="nama" />
        </div>
        <div class="input">
          <label>alamat</label>
          <input type="text" name="alamat" />
        </div>
        <div class="submit">
          <input type="submit" name="submit" value="Simpan" />
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php require('footer.php'); ?>
