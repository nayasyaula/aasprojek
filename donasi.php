<?php
include 'koneksi.php';

// Tambah Donasi
if (isset($_POST['tambah'])) {
    $donatur = $_POST['donatur'];
    $donatur_id = $_POST['donatur_id'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];


    $sql = "INSERT INTO donasi (donatur, donatur_id, paket, kategori, nominal) VALUES ('$donatur', '$donatur_id', '$paket', '$kategori', '$nominal' )";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        echo "Donasi berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan donasi: " . mysqli_error($koneksi);
    }
}

// Tampilkan Donasi
$sql = "SELECT * FROM tb_donasi";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: #9AC5F4;
    }
    .card-body{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border-radius: 30px;
    }
</style>


<body>
<div class="card" style="width: 30rem; height: 10rem; margin-top:200px; margin-left:30%; border-radius: 30px;">
  <div class="card-body" style="background-color: #99DBF5; ">
    <h2 class="card-title">Tambah Donasi</h2>
    <hr>
    <form method="POST" action="donasi.php">
        <label>Donatur:</label>
        <input type="text" name="donatur" required autofocus>
        <br>
        <label>Donatur ID:</label>
        <input type="text" name="donatur_id" required>
        <br>
        <label>Paket:</label>
        <input type="text" name="paket" required>
        <br>
        <label>Kategori:</label>
        <input type="text" name="kategori" required>
        <br>
        <label>Nominal:</label>
        <input type="text" name="nominal" required>
        <br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
    <a href="index.php">Kembali</a>
  </div>
</div>
</body>
</html>
