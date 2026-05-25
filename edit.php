<?php
include 'koneksi.php';

// Ambil ID dari URL

$id = $_GET['id'];
// Ambil data siswa berdasarkan ID
$data = mysqli_query($koneksi, "SELECT * FROM siswaa WHERE id='$id'");
$d=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<a href="tampil.php">Kembali ke Daftar</a>

<br><br>

<form method="POST" action="proses_edit.php">
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<label>Nama Lengkap: </label><br>

<input type="text" name="nama" value="<?php echo $d['nama']; ?>"required><br><br>


<label>jurusan: </label><br>

<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"required><br><br>



<button type="submit" name="update">Simpan Perubahan</button>

</form>
</body>
</html>