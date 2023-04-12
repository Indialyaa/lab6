<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM db_mobil WHERE form_input = '{$nama}'";
$result = mysqli_query($koneksi, $sql);
header('location: home.php');
