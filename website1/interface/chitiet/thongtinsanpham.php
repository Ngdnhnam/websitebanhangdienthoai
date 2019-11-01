<?php
include("interface/config.php");
$sql_thongtin="select * from chitiethang where id_chitiet=$_GET[id]";
$run_thongtin=mysqli_query($conn,$sql_thongtin);
$row_thongtin=mysqli_fetch_array($run_thongtin);
?>

<div class="row" style="border-left:1px solid gray; border-bottom: 1px solid gray">
	<div class="col-md-4" >
	<img src="quantri/model/chitietsp/upload/<?php echo $row_thongtin['hinhanh'];?>" width="250px" height="300px">
	</div>
	<div class="col-md-4" style="border-right: 1px solid gray; text-align: center;">
		<dl>
    	<dt> Sản Phẩm : <?php echo $row_thongtin["tenchitiet"]; ?></dt>
    	<dt> Giá : <?php echo $row_thongtin["gia"]." VND"; ?></dt>
    </dl>

    <div class="row" style="border-style: solid ;  border-width: 1px; margin-bottom: 5px; ">
    	<div class="col-md-12" >
	    	 <dl>
	    	    <dt>khuyến mãi</dt>
	    	    <dd style="color: red;">giảm thêm 5% (220.000đ) cho khách mua online.. </dd> 
	    	    <dd style="color: red;">không áp dụng khi mua trả góp.</dd>
	    	 </dl>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12 bg-danger">
    		<a href="index.php?xem=giohang&add=<?php echo $row_thongtin['id_chitiet'];?>" style="text-decoration: none;"><h4 style="text-align: center;">MUA NGAY</h5></a>
    	</div>
    </div>
	</div>
	<div class="col-md-4">
		<dl>
			<dt style="background-color: yellow; text-align: center;">Thông Số Kỹ Thuật </dt>
    	<dd> - <?php echo $row_thongtin["mota"]; ?></dd>
		</dl>
	</div>
</div>