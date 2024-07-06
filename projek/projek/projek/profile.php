<?php 
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
                <form action="cek_reg.php" method="POST">
                
                <?php
			$username = $_SESSION['username']; // mengambil username dari session yang login
			
			$sql = $connection->query("SELECT * FROM users WHERE username='$username'"); // query memilih entri username pada database
			if(mysqli_num_rows($sql) == 0){
			}else{
				$user = mysqli_fetch_assoc($sql);
			}
			?>
			<!-- bagian ini digunakan untuk menampilkan data profile -->
			<table class="table table-striped table-condensed">
      <tr>
					<th>Username</th>
					<td><?php echo $user['username']; ?></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><?php echo $user['password']; ?></td>
				</tr>
				<tr>
					<th width="20%">Nama lengkap</th>
					<td><?php echo $user['full_name']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $user['email']; ?></td>
				</tr>
                <tr>
					<th>Phone</th>
					<td><?php echo $user['phone']; ?></td>
				</tr>
				
			</table>
			
      <a href="edit-prof.php?id=<?= $user['id']; ?>"
      class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Profile</a>
		</div> <!-- /.content -->
	</div> <!-- /.container -->
                </form>
            </div>
        </div>
    </div>
			

     
     
      <?php require './_partials/scrolltop.php'?>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
