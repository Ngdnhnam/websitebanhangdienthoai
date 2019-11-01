<?php
session_start();
include("model/config.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản trị Website</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body style="background-color: gray;">
 <div class="container ">
 	<div class="row">
	      <div class="col-md-auto bg-white" style="width: 400px; margin-left: 350px; margin-top: 50px; ">
	      <h1 style="text-align: center;"> <span class="badge badge-warning">LOGIN QUẢN TRỊ</span></h1>
	 <form action="dangnhap.php" class="was-validated" method="POST" >
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">có giá tri !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">có giá trị !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
  
    <button style=" width: 370px; margin-bottom: 10px;" type="submit" class="btn btn-primary bg-warning" name="sub">Login</button>
  </form>
 </div>
 </div>
  </div> 
<script type="js/bootstrap.min.js"></script>
</body>
</html>


<?php
if(isset($_POST["sub"])){
	$use=$_POST["uname"];
	$pass=$_POST["pswd"];

	$sql="select * from login where username='$use' and password='$pass'";
	$run=mysqli_query($conn,$sql);
	$kt=mysqli_num_rows( $run);

	if($kt>0){
		$_SESSION['dangnhap'] =$use;
         header("location:index.php");
	}
	else{
		echo "<script>alert('tài khoản không đúng');</script>";
		//header("location:dangnhap.php");
	}
}




?>