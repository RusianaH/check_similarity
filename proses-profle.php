<?php 
require './config.php';

if(isset($_POST['simpan'])){


    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = mysqli_query($connection, "UPDATE  users SET full_name='$full_name',username='$username',password='$password',email='$email',phone='$phone' WHERE id='$id' ");

        if( $sql ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: profile.php');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            die("Gagal menyimpan perubahan...");
        }
    
    
    } else {
        die("Akses dilarang...");
    
    }
?>