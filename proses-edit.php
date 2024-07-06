<?php 
require './config.php';

if(isset($_POST['simpan'])){


    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];

    $sql = mysqli_query($connection, "UPDATE  files SET judul='$judul',nama='$nama',nim='$nim',tahun='$tahun',deskripsi='$deskripsi' WHERE id='$id' ");

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