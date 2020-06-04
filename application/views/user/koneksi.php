<?php 
$dbhost = 'localhost'; 
$dbuser = 'root';     
$dbpass = '';         
$dbname = 'butuhevent';

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);


if ($mysqli->connect_error){
echo 'Gagal koneksi ke database';
} else { } 
 
?>