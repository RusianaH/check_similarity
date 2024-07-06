<?php 
require __DIR__.'/vendor/autoload.php';
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();
require './config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/min.css">
    <link rel="stylesheet" type="text/css" href="assets/admin.js">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin.css">

    <title>Deteksi Plagiat</title>
  </head>

  <?php 
      
      session_start();

      if($_SESSION['role']==""){
          header("location:login.php?pesan=gagal");
      }
      
      ?>
  <body id="page-top">
  <?php require './_partials/navbar.php' ?>

  <div id="wrapper">

  <?php require './_partials/sidebar-user.php' ?>

  <div id="content-wrapper">

    <div class="col-md-12 p-3 pt-2">
          <h3><i class="fas fa-clipboard-list"></i> List Data</h3><hr>
            <div id="content-wrapper">
                <div class="continer-fuild">
                    <!-- new file -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="tambah_judul.php"><i class="fas fa-plus"></i> ADD NEW</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
							    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Nim</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Judul Tugas Akhir</th>
                                            <th scope="col">Deskripsi</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = mysqli_query($connection, "SELECT * FROM files");
                                            $no =1;
                                            foreach($sql as $files){
                                                ?>
                                                <tr width="250">
                                                    <td>
                                                        <?php echo $no++; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $files['nama']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $files['nim']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $files['tahun']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $files['judul']; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $files['deskripsi']; ?>
                                                    </td>
                                                    
                                                    <td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                            
                                            ?>
                                    </tbody>
                                </table>
                                
                                
                            </div>
                        </div>
                 </div>
                 </div>
            </div>

    </div>
            
    <footer>
        <?php require './_partials/footer.php'?>
      </footer>
      <?php require './_partials/scrolltop.php'?>
                                </body>

