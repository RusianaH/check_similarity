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
  <body>   
      <?php 
      
      session_start();

      if($_SESSION['role']==""){
          header("location:login.php?pesan=gagal");
      }
      
      ?>
    <body id="page-top">
  <?php require './_partials/navbar.php' ?>

  <div id="wrapper">

  <?php require './_partials/sidebar.php' ?>

  <div id="content-wrapper">

        <div class="col-md-12 p-3 pt-2">
            <h3><i class="fas fa-fw fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>
                 <div id="content-wrapper">
            <div class="continer-fuild">

        <?php 
            require './config.php';
            $query = mysqli_query($connection, "SELECT * FROM files");
            $jumlah = mysqli_num_rows($query);
            ?>
            </div>

            <div class="jumbotron jumbotron-fluid">
            <div class="container center">
                <h1 class="display-4">SELAMAT DATANG</h1>
                <p class="lead">selamat datang pada halaman utama untuk Admin</p>
            </div>
            </div>

            <div class="row text-white">
                <div class="card bg-success ml-2" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <i class="fas fa-fw fa-boxes"></i>
                        </div>
                        <h5 class="card-title">Jumlah Mahasiswa</h5>
                        <div class="display-4"><?php  echo $jumlah; ?></div>
                        <a href="list.php"><p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-danger ml-3" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <i class="fas fa-fw fa-boxes"></i>
                        </div>
                        <?php 
                            require './config.php';
                            $query = mysqli_query($connection, "SELECT * FROM users ");
                            $jumlahuser = mysqli_num_rows($query);
                            ?>
                        <h5 class="card-title">Jumlah User & Admin</h5>
                        <div class="display-4"><?php  echo $jumlahuser?></div>
                       
                    </div>
                </div>
                <div class="card bg-info ml-3" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                        <i class="fas fa-fw fa-boxes"></i>
                        </div>
                        <?php 
                            require './config.php';
                            $query = mysqli_query($connection, "SELECT * FROM files");
                            $jumlahjudul = mysqli_num_rows($query);
                            ?>
                        
                        <h5 class="card-title">Jumlah judul yang diajukan</h5>
                        <div class="display-4"><?php echo $jumlahjudul; ?></div>
                        
                    </div>
                </div>

                
                
            </div>
    </div>
    </div>


           



           
            


    <footer>
        <?php require './_partials/footer.php'?>
      </footer>

      <?php require './_partials/scrolltop.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>