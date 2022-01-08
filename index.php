<?php 

//$conn = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("tugasalpro1", $conn);
//$query = mysql_query("select * mahasiswa", $conn);

// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "tugasalpro1";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
    <body>
<!-- tampilkan data di tabel -->

<table>
    <thead>
        <tr>
            <td>NIM</td>
            <td>NAMA</td>
            <td>TAHUN LAHIR</td>
            <td>UMUR</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($mahasiswa as $hasil) :
            ?>
        <tr>
            <td><?=$hasil["nim_mahasiswa"];?></td>
            <td><?=$hasil["nama_mahasiswa"];?></td>
            <td><?=$hasil["tahun_lahir"];?></td>
            <td><?=$hasil["umur"];?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </body>
</html>