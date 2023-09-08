<?php
//$_GET
$mahasiswa = [
    [
      "nrp" =>"042330400",
      "nama"=>"DIAH KUSUMA DEWI",
      "email" =>"diahkusumadewi@gmail.com",
      "jurusan" =>"rekayasa perangkat lunak",
      "gambar" =>"dewi1.jpeg",
    ],
[
      "nama"=>"AGISTA EVELIA",
      "nrp" =>"042330400",
      "email" =>"diahkusumadewi@gmail.com",
      "jurusan" =>"rekayasa perangkat lunak",
      "gambar" =>"dewi2.jpeg",
]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
   <li>
      <a href ="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?=
      $mhs["nrp"]; ?>&email=<?= $mhs["email"];?>&jurusan=<? $mhs["jurusan"];
        ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
   </li>
<?php endforeach; ?>
</ul>
    

 </body>
 </html>

