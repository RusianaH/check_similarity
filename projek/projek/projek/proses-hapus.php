<?php
 require './config.php';

 if (isset($_GET['id'])) {

    $id = $_GET['id'];
     
    $sql = mysqli_query($connection, "DELETE FROM  files WHERE id='$id' ");

    if( $sql ){
        header('Location: list.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");

 }


?>