<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connection,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['full_name'] = $full_name;
		$_SESSION['email'] = $email;
		$_SESSION['phone'] = $phone;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");
 
	// cek jika user login sebagai mmahasiswa
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['full_name'] = $full_name;
		$_SESSION['email'] = $email;
		$_SESSION['phone'] = $phone;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard mahasiswa
		header("location:index-user.php");
 

 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>