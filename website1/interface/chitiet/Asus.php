<?php
  if(isset($_POST["asus"])){
  	$sql_asus="select * from chitiethang where hangthietbi like '%Asus%'";
  	$run_asus=mysqli_query($conn,$sql_asus);
?>
<div class="row">
	<div class="col-md-12 bg-warning" style="text-align: center;">Những Sản Phẩm Thuộc Hãng SAMSUNG</div>
</div>
<div class="row" style="margin-top: 10px;">
	<div class="col-md-2">
		<form method="POST">
	  <div class="form-group">
        <input type="submit" class="form-control" name="apple" value="APPLE">
      </div>
      </form>
    </div>

    <div class="col-md-2">
    	<form method="POST">
	   <div class="form-group">
        <input type="submit" class="form-control" name="samsung" value="SAMSUNG">
       </div>
       </form>
    </div>

    <div class="col-md-2">
    	<form method="POST">
	   <div class="form-group">
        <input type="submit" class="form-control" name="oppo" value="OPPO">
       </div>
       </form>
    </div>

    <div class="col-md-2">
    	<form method="POST">
	   <div class="form-group">
        <input type="submit" class="form-control" name="asus" value="ASUS">
       </div>
       </form>
    </div>

    <div class="col-md-2">
    	<form method="POST">
	   <div class="form-group">
        <input type="submit" class="form-control" name="dell" value="DELL">
       </div>
       </form>
    </div>
</div>

<div class="row">
<?php 
if(mysqli_num_rows($run_asus)>0){
while ($row_asus=mysqli_fetch_array($run_asus)) { ?>
	<div class="col-md-3 bg-white">
	<img src="quantri/model/chitietsp/upload/<?php echo $row_asus['hinhanh'];?>" width="80px" height="100px"><br>
		Sản Phẩm : <?php echo $row_asus["tenchitiet"];?><br>
	    Giá : <?php echo $row_asus["gia"];?><br>
		<a href="index.php?xem=thongtinsp&id=<?php echo $row_asus['id_chitiet']?>">Xem chi Tiết</a>
	</div>
<?php }
}else {
	echo '<div class="col-md-12 bg-warning">Không Tồn Tại Sản Phẩm Này Mong Bạn Tìm Kiếm Lại</div>';
}
}
?>
</div>