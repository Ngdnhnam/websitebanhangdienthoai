 <?php
if (isset($_GET['xem'])) {
	$click=$_GET['xem'];

	if($click=="loaisanpham"){
		include("model/loaisp/main.php");
	}

	elseif ($click=="thongtinsanpham") {
		include("model/chitietsp/main_chitiet.php");
	}
}

 ?>

 