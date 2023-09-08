<?php
//$mahasiswa = [
  //   ["Diah Kusuma Dewi",042330400", "rekayasa perangkat lunak","diahkusumadewi@gmail.com"],
   // ["Amanda Dewi Pertiwi", "033040001", "teknik mesin","Amanda@gmail.com"]
// ];

// array associatife
// definisinya sama seperti array numefik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [  
    [
    "nama"=>"DIAH KUSUMA DEWI",
    "nrp" =>"042330400",
    "email" =>"diahkusumadewi@gmail.com",
    "jurusan" =>"rekayasa perangkat lunak",
    "gambar" =>"dewi2.jpeg"
    ],
[
    "nama"=>"DIAH KUSUMA DEWI",
    "nrp" =>"042330400",
    "email" =>"diahkusumadewi@gmail.com",
    "jurusan" =>"rekayasa perangkat lunak",
    "gambar" =>"dewi1.jpeg",
]
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
   <li>
      <img src="img/<?= $mhs["gambar"]; ?>" width="150">
   </li>
   <li> NAMA : <?= $mhs["nama"]; ?></li>
   <li> NRP : <?= $mhs["nrp"]; ?></li>
   <li> JURUSAN : <?=$mhs["email"]; ?></li>
   <li> EMAIL : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php  endforeach; ?>



</body>
</html>