<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Input Data</title>
<style>

body { font-family: 'Segoe UI', sans-serif; background-color: grey; display: flex;

justify-content: center; padding-top: 50px; }

.form-card { background: white; padding: 30px; border-radius: 8px; box-shadow:16px 15px rgba(0,0,0,0.1); width: 350px; }

h2 { text-align: center; color: black; margin-bottom: 20px; }

label { display: block; margin-bottom: 5px; color: blue; font-size: 14px; }

input[type="text"] { width: 90%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }

button { width: 100%; padding: 10px; background-color: green; border: none; color: white; border-radius: 4px; cursor: pointer; font-size: 16px; }

button:hover { background-color: green; }

.back-link { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: blue; font-size: 14px; }

</style>
</head>
<body>

<div class="form-card">
<h2>Form Siswa</h2>
<h2>Aryaa</h2>
<form method="POST">
<input type="text" name="v_nama" placeholder="Nama Siswa" required>
<input type="text" name="v_nohp" placeholder="nohp" required>
<input type="text" name="v_jurusan" placeholder="Jurusan" required>
<button type="submit" name="b_simpan">Simpan</button><br>

<a href="tampil.php" class="back-link">lihat daftar siswa</a>

<?php

if (isset($_POST['b_simpan'])) {

$nama = $_POST['v_nama'];
$nohp = $_POST['v_nohp'];
$jurusan = $_POST['v_jurusan'];

$query = "INSERT INTO siswaa (nama,nohp,jurusan) VALUES ('$nama','$nohp','$jurusan')";

mysqli_query($koneksi, $query);

echo "Data berhasil masuk!";

}

?>