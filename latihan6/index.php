<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative 
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//  var_dump($mhs);
// }


?>
<DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

   <tr>
      <td>No.</th>
      <td>Aksi</th>
      <td>Gambar</th>
      <td>NRP</th>
      <td>Nama</th>
      <td>Email</th>
      <td>Jurusan</th>
   </tr>

<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
<tr>
   <td>1</td>
   <td>
      <a href="">ubah</a> 
      <a href="">hapus</a>
   </td>
   <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
   <td>0434040023</td>
   <td>Diah Kusuma Dewi</td>
   <td>diahkusumadewi@gmail.com</td>
   <td>Teknik Informatika</td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>