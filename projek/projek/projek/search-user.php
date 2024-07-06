<?php 
require __DIR__.'/vendor/autoload.php';
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();
require './preprocessing.php';



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

     <div id = "content-wrapper">
         <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header" >
                    <a href="index.php"><i class="fas fa-arrow-left" ></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="deteksi-user.php" method="post">
                            <div class="mb-3">
                                <center>
                                    <h3>Cari Judul Tugas Akhir Mahasiswa Sistem Informasi</h3>
                                </center>
                                    <br> <input type="text"class="form-control" name="q" id="pencarian" aria-describedby="helpId"
                                        placeholder="Ketikan judul disini" autofocus autocomplete="off">
                                        <small id="helpId" class="form-text text-muted">*Minimal 4 kata</small>
                            </div>
                            <center>
                                <button type="submit" name="simpan"class="btn btn-primary sm-lg" value ="cari">Uji Plagiat</button>
                            </center>
                            </div>
                                
                                    <?php
                                        //@TODO:Improve Algorithm, kecocokan
                                        //Make better UX/UI
                                        require './config.php';
                                        if(isset($_POST['simpan'])){
                                            $simpan = $_POST['simpan'];
                                            $q = $_POST['q'];
                                            $output = $stemmer->stem($q);
                                            $cosine = new Cosine;
                                            //Q akan mendapatkan nilai dari Q
                                            $cosine->Q($output);
                                            echo "<h3 style='text-align:center'>Anda mengajukan judul : ".$output."</h3>";
                                            //Dn akan mendapatkan nilai dari D1...n
                                            $cosine->Dn();
                                            $cosine->Dfidf();
                                            $cosine->Tfidf();
                                            $cosine->similarity();
                                        }
                                        
                                    ?>
                     </form>
                 </div>
                </div>
                </div>
            </div>
         </div>
        
     </div>

  
    <footer>
        <?php require './_partials/footer.php'?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    