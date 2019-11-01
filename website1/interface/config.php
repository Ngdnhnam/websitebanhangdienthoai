<?php
$tenmaychu="localhost";
$tentaikhoan="root";
$matkhau="";
$csdl="banhang";
$conn= mysqli_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl) or die("không kết nối đươc");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>