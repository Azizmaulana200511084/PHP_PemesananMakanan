<?php
include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: pelanggan.php?status_update=update');
    } else {
        header('Location: pelanggan.php?status_update=gagal_edit');
    }
} else {
    die("Akses dilarang...");
}
?>   