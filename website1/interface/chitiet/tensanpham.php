<!--lấy tên thiết bị ra -->
<div class="row">
   <?php
  $sql_tenthitbi="select * from loaihang where id_loai=$_GET[id]";
  $run_tenthietbi=mysqli_query($conn,$sql_tenthitbi);
  while ($row_thietbi=mysqli_fetch_array($run_tenthietbi)) {
 ?>
  <div class="col-md-12 bg-warning" style="text-align: center;"><?php echo $row_thietbi["tenthietbi"];} ?></div>
</div>

<!-- hiển thị thiết bị khi chọn tronh danh sách  -->
<div class="row" style="margin-top: 10px;">
 <?php
$sql="select * from chitiethang where id_loai=$_GET[id] ";
$run=mysqli_query($conn,$sql);
 while ($row_all=mysqli_fetch_array($run)) { ?>
  <div class="col-md-3 bg-white">
    <img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" width="80px" height="100px"><br>
     Sản Phẩm : <?php echo $row_all["tenchitiet"];?><br>
     Giá : <?php echo $row_all["gia"];?><br>
    <a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>">Xem chi Tiết</a>
  </div>
<?php }?>
</div>


