<?php 
require './config.php';

if( !isset($_GET['id'])) {
    header('edit-prof.php');
}
  //ambil id dari query string
  $id = $_GET['id'];
  
  // buat query untuk ambil data dari database
  $sql = "SELECT * FROM  users  WHERE id = $id";
  $query = mysqli_query($connection, $sql);
  $user = mysqli_fetch_assoc($query);
  // jika data yang di-edit tidak ditemukan
  if( mysqli_num_rows($query) < 1 ){
  die("data tidak ditemukan...");
  }


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

    <?php 
      session_start();
      if($_SESSION['role']==""){
          header("location:login.php?pesan=gagal");
      }
      
      
      ?>
    <title>Deteksi Plagiat</title>
  </head>

  
  
  <body id="page-top">
  <?php require './_partials/navbar.php' ?>

  <div id="wrapper">

  <?php require './_partials/sidebar-user.php' ?>

  <div id="content-wrapper">

			<div class="container-fluid">
    
      <title>PROFILE USER </title>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">PROFILE USER </h1>
                <p class="lead">Deteksi Plagiat judul</p>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-5 mx-auto mt-5">

              <form method="POST" action="./proses-profle.php" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $user['id']?>" />
			<!-- bagian ini digunakan untuk menampilkan data profile -->
			<table class="table table-striped table-condensed">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $user['username'] ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password"  value="<?php echo $user['password'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="full_name">nama lengkap</label>
                        <input type="text" class="form-control"   name="full_name" value="<?php echo $user['full_name'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control"  name="email" value="<?php echo $user['email'] ?> "/>
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="phone" class="form-control"   name="phone" value="<?php echo $user['phone'] ?>" />
                    </div>
					
				
			</table>
			
    
      <button type="submit" name="simpan" value ="simpan"id="" class="btn btn-success btn-lg btn-block">Simpan</button>
		</div> <!-- /.content -->
	</div> <!-- /.container -->
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
      <?php require './_partials/scrolltop.php'?>
      
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
  </body>
  
</html>
