<?php
// membuat koneksi
include "koneksi.php";

// Deklarasi variable
$email = $_POST['email'];
$password = $_POST['password'];
$sql1 = "SELECT * FROM user WHERE email='$email' and password='$password'";
$stmt =($mysqli->query($sql1));

if(empty($email) or empty($password)){
 echo "<script>alert('tidak boleh kosong!!! Silakan ulangi lagi') </script>";
 }else
if ($stmt->num_rows > 0){
  echo "<script>alert('Berhasil Login')</script>";
  echo "<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/application/views/user.php'>";
}else{
echo "<script>alert('Email atau Password salah')</script>";
echo "<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/''>";
}	

?>
