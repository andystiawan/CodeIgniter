<?php
// membuat koneksi
include "koneksi.php";


// Deklarasi variable
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$sql1 = "SELECT email FROM user WHERE email='$email'";
$stmt =($mysqli->query($sql1));

 if(empty($email) or empty($password)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi') </script>";
 }else
 if ($stmt->num_rows > 0){
  echo "<script>alert('EMAIL yang anda masukan sudah ada yang pakai.Silahkan Ulangi lagi')</script>";
  echo "<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/'>";
}else{
 
	$sql="INSERT INTO user(nama_awal,nama_akhir,email,password,country) values ('$fname','$lname','$email','$password','$country')";
	if ($mysqli->query($sql)){
	echo "<script>alert('Berhasil Mendaftar')</script>";
	echo "<meta http-equiv='refresh'  content='1;url=http://localhost/ButuhEvent.Com/'>";
	}else{
	echo "<script>alert('Gagal Mendaftar')</script>";
	echo"<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/'>";
	}
 }
 
?>