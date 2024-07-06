<?php 
require './config.php';
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
  <body>
  <body id="page-top">
  <?php require './_partials/navbar.php' ?>

  <div id="wrapper">

  <?php require './_partials/sidebar-user.php' ?>

  <div id="content-wrapper">

			<div class="container-fluid">
    
      <div class="col-md-12 p-5 pt-2">
          <h3><i class="fas fa-folder-plus"></i> New File</h3><hr>
            <div id="content-wrapper">
            <div class="continer-fuild">
              <!-- new file -->
              <div class="card mb-3">
              <div class="card-header">
                <a href="dashboard"><i class="fas fa-arrow-left"></i> Back</a>
              </div>
              <div class="card-body">

              <form method="POST" action="proses_simpan.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Input nama">
                              <small id="helpId" class="form-text text-muted">Masukkan nama</small>
                          </div>
                          <div class="form-group">
                              <label for="">Nim</label>
                              <input type="number" class="form-control" name="nim" id="" aria-describedby="helpId" placeholder="Input Nim">
                              <small id="helpId" class="form-text text-muted">Masukkan Nim</small>
                          </div>
                          <div class="form-group">
                              <label for="">Judul</label>
                              <input type="text" class="form-control" name="judul" id="" aria-describedby="helpId" placeholder="Input judul">
                              <small id="helpId" class="form-text text-muted">Masukkan judul</small>
                          </div>
                          <div class="form-group">
                              <label for="">Tahun</label>
                              <input type="current_timestamp" class="form-control" name="tahun" id="" aria-describedby="helpId" placeholder="Input file tahun">
                              <small id="helpId" class="form-text text-muted">Masukkan File tahun dibuat</small>
                          </div>
                          <div class="form-group">
                              <label for="">Deskripsi / Keterangan</label>
                              <input type="text" class="form-control" name="deskripsi" id="" aria-describedby="helpId" placeholder="Input keterangan">
                              <small id="helpId" class="form-text text-muted">Masukkan keterangan</small>
                          </div>
                </div>
                </div>
                    <button type="submit" name="simpan" value ="simpan"id="" class="btn btn-success btn-lg btn-block">Simpan</button>
                </div>
              </form>
              <div class="card-footer small text-muted">
                    * required fields
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

