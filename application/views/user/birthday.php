<?php
// membuat koneksi
include "koneksi.php";

// Deklarasi variable
$name = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$no_hp = $_POST['no_hp'];
$sql1 = "SELECT email FROM birthday WHERE email='$email'";
$stmt =($mysqli->query($sql1));

 if(empty($email) or empty($deskripsi)){
 
  echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi') </script>";
  echo "<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/'>";
 }else
 if ($stmt->num_rows > 0){
  echo "<script>alert('Anda Sudah Memesan 1 Event Ulang Tahun dengan Email ini')</script>";
  echo "<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/'>";
}else{
 
	$sql="INSERT INTO birthday(name,email,alamat,deskripsi,no_hp) values ('$name','$email','$alamat','$deskripsi','$no_hp')";
	if ($mysqli->query($sql)){
	echo "<script>alert('Berhasil Memesan')</script>";
	echo "<meta http-equiv='refresh'  content='1;url=http://localhost/ButuhEvent.Com/'>";
	}else{
	echo "<script>alert('Gagal Memesan')</script>";
	echo"<meta http-equiv='refresh' content='1;url=http://localhost/ButuhEvent.Com/'>";
	}
 }
 
?>