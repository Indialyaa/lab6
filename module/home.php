<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HOME</title>
</head>
<body>
    <div class="container">
    <h1>Data Barang</h1>
    
    <a class="tambahBarang" href="tambah.php">+ Tambah Barang</a>
    
    <div class="main">
      <table>
        <tr>
          <th>Nim</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
        <?php if ($result) : ?>
          <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr>
              <td><?= $row['Nim']; ?></td>
              <td><?= $row['Nama']; ?></td>
              <td><?= $row['Kelas']; ?></td>
              <td>
                <a href="/aksi/ubah.php $row['Nim']; ?>"><input type='button' class='tombolubah'></a>
                <a href="./aksi/hapus.php $row['Nim']; ?>"><input type='button' class='tombolhapus'></a>
              </td>
            </tr>
          <?php endwhile;
        else : ?>
          <tr>
            <td colspan="7">Belum ada data</td>
          </tr>
        <?php endif; ?>
      </table>
    </div>
  </div>
</body>

</html>
</body>
</html>
<?php require('footer.php'); ?>