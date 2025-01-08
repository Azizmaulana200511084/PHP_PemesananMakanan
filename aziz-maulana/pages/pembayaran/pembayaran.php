<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Aziz Maulana</title>
    <link rel="stylesheet" href="/aziz-maulana/css/styles.css">
</head>

<body>
    <input type="checkbox" id="aziz-menu">
    <label for="aziz-menu">
        <div class="aku">
            <span class="daftar-menu"></span>
            <span class="daftar-menu"></span>
            <span class="daftar-menu"></span>
            <span class="daftar-menu"></span>
            <span class="daftar-menu"></span>
            <span class="daftar-menu"></span>
        </div>
    </label>

    <div class="link-menusamping"></div>
    <div class="aziz-menu">
        <ul>
            <img src="/aziz-maulana/gambar/logo.png" class="azizlogo"><br>
            <li><a href="/index.php">Beranda</a></li>
            <li><a href="/aziz-maulana/pages/pelanggan/pelanggan.php">Pelanggan</a></li>
            <li><a href="/aziz-maulana/pages/makanan/makanan.php">Menu Makanan</a></li>
            <li><a href="/aziz-maulana/pages/transaksi/transaksi.php">Transaksi</a></li>
            <li><a href="/aziz-maulana/pages/pembayaran/pembayaran.php">Pembayaran</a></li>
            <li><a href="/aziz-maulana/pages/about.html">about</a></li>
        </ul>
    </div>

    <br><br>

    <nav> 
        <a href="tambah.php">[+] Tambah Baru</a> 
    </nav>
    <center style="color: white;">
    <?php if(isset($_GET['status_pendaftaran'])): ?>
    <p>
        <?php
            if($_GET['status_pendaftaran'] == 'ditambahkan'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    </center>

    <center>
    <table border="1"> 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Nama</th> 
            <th>Alamat</th> 
            <th>Jenis Kelamin</th> 
            <th>Agama</th> 
            <th>Sekolah Asal</th> 
            <th>Tindakan</th> 
        </tr> 
    </thead> 
    <tbody> 
        
        <?php 
        $sql = "SELECT * FROM calon_siswa"; 
        $query = mysqli_query($db, $sql); 
        
        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>"; 
 
            echo "<td>".$siswa['id']."</td>"; 
            echo "<td>".$siswa['nama']."</td>"; 
            echo "<td>".$siswa['alamat']."</td>"; 
            echo "<td>".$siswa['jenis_kelamin']."</td>"; 
            echo "<td>".$siswa['agama']."</td>"; 
            echo "<td>".$siswa['sekolah_asal']."</td>"; 
 
            echo "<td style='background-color:red; color:yellow;'>"; 
            echo "<a href='edit.php?id=".$siswa['id']."' style='color:white;'>Edit</a> | "; 
            echo "<a href='hapus.php?id=".$siswa['id']."' style='color:white;'>Hapus</a>"; 
            echo "</td>"; 
 
            echo "</tr>"; } 
    ?> 
    </tbody>
    <p style="color: white; font-size:large; text-align:center; background-color: red;">TABEL PEMBAYARAN</p>
    <p style="color: white; font-size:large; text-align:center;">Total: <?php echo mysqli_num_rows($query) ?></p>
    </table> 
    </center>
    </body> 
</html> 