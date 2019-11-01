<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang Quản Trị Website</title>
	<link rel="stylesheet" type="text/css" href="../css1/bootstrap.css">
</head>
<body style="background-color: gray;">
 <div class="container-fluid ">
	<?php
	if(!isset($_SESSION['dangnhap'])){
	header("location:dangnhap.php");
}
     include("model/header.php");
     include("model/menu.php");
     include("model/content.php");
     include("model/footer.php");
	?>	
 </div>
<script type="js/bootstrap.min.js"></script>
</body>
</html>