<?php
include("interface/config.php");
if(isset($_POST["submit"])){
	$timkiem=$_POST["tk"];
	$sql="select * from chitiethang where tenchitiet like '%$timkiem%' ";
	$run=mysqli_query($conn,$sql);
?>
<div class="row">
<?php 
if(mysqli_num_rows($run)>0){
	echo '<div class="col-md-12 bg-warning">Sản Phẩm Cần Tìm Là </div>';
while ($row_all=mysqli_fetch_array($run)) { ?>
	<div class="col-md-3 bg-white">
		<img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" width="80px" height="100px"><br>
		Sản Phẩm : <?php echo $row_all["tenchitiet"];?><br>
	    Giá : <?php echo $row_all["gia"];?><br>
		<a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>">Xem chi Tiết</a>
	</div>
<?php }
}else {
	echo '<div class="col-md-12 bg-warning">Không Tồn Tại Sản Phẩm Này Mong Bạn Tìm Kiếm Lại</div>';
}
}
?>
</div>

