<?php 
// Sertakan file koneksi ke database
include"../../config/db/koneksi.php";

// mengambil data dari form
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	
// memeriksa password dengan repeat password
