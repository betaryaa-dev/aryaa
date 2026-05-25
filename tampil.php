<?php include 'koneksi.php'; ?>
<DOCTYPE html>
<html>
<head>
<title>Sistem Data Siswa</title>
<style>
body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
background-color: white; margin: 5px; }
.container { background: grey; padding: 5px; border-radius: 5px; box-shadow: 1px 10px rgba(0,0,0,0.1); }
h2 { color: #333; }
table { width: 100%; border-collapse: collapse; margin-top: 20px; }
th, td { padding: 12px; text-align: left; border-bottom: 20px solid #ddd; }
th { background-color: green; color: black; }
tr:hover { background-color: white; }
tr:nth-child(even) { background-color: white; }

.btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; font-size: 14px;

color: white; }

.btn-tambah { background-color: green; margin-bottom: 20px; display:inline-block; }
.btn-hapus { background-color: #f44336;}
.btn-edit { background-color: #ff9800;}

.btn:hover { opacity: 0.8; }
</style>
</head>
<body>

<div class="container">

<h2><I>Daftar Siswa RPL</I></h2>

<a href="index.php" class="btn btn-tambah">+ Tambah Siswa</a>

<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>nohp</th>
<th>Jurusan</th>
<th>delete/edit</th>

</tr>

<?php

$data = mysqli_query($koneksi, "SELECT * FROM siswaa");
$no = 1;

while($d=mysqli_fetch_array($data)) {

?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['nohp']; ?></td>
<td><?php echo $d['jurusan']; ?></td>
<td> 
	
	<a href ="delete.php?id=<?php echo $d['id'];?>" class="btn btn-hapus" onclick="return confirm('yakin mau hapus?')">hapus</a>
	<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-edit">Edit</a>
</td>
</tr>

<?php }?>
</table>
</div>
</body>
</html>