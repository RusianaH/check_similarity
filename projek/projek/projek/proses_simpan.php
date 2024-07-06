<?php 
require './config.php';

if(isset($_POST['simpan'])){



    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];

    $sql = mysqli_query($connection, "INSERT into files (judul,nama,nim,tahun,deskripsi) values('$judul','$nama', '$nim', '$tahun', '$deskripsi')");

        if( $sql ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: list.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    
    
    } else {
        die("Akses dilarang...");
    
    }
?>