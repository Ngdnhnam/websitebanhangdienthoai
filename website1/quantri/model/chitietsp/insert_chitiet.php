<?php
include("model/config.php");
// $tenmaychu="localhost";
// $tentaikhoan="root";
// $matkhau="";
// $csdl="banhang";
// $conn= mysqli_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl) or die("không kết nối đươc");
// mysqli_query($conn,"SET NAMES 'UTF8'");
$sql="select * from loaihang order by id_loai desc";
$kt_chitiet=mysqli_query($conn,$sql);
?>

<form action="model/chitietsp/xuly_chitiet.php" method="POST" enctype="multipart/form-data">
	<div style="background-color: red; color: black; text-align: center;">INSERT</div>
    <div class="form-group">
      <label for="">Tên Thiết Bị</label>
      <input type="text" class="form-control"  placeholder="thiet bi" name="ten">
    </div>
    <div class="form-group">
      <label for="">Giá</label>
      <input type="text" class="form-control"  placeholder="giá " name="gia">
    </div>
    <div class="form-group">
      <label for="">hình ảnh</label>
      <input type="file" class="form-control"  placeholder="hình ảnh" name="anh">
    </div>
    <div class="form-group">
      <label for="">Mô Tả</label>
      <textarea name="mota" cols="30" rows="15"></textarea>
    </div>
    <div class="form-group">
      <label for="">thứ Tự</label>
      <input type="text" class="form-control"  placeholder="thứ tự" name="ttu">
    </div>
    <div class="form-group">
      <label for="">Hãng Thiết Bị</label>
      <input type="text" class="form-control"  placeholder="hãng thiết bị" name="hang">
    </div>

    <div class="form-group">
      <label for="">loai sản phẩm</label>
    <select name="id" class="custom-select">
    <?php
    while ($rows=mysqli_fetch_array($kt_chitiet)) {
    
    ?>
    <option value="<?php echo $rows["id_loai"]; ?>"><?php echo $rows["tenthietbi"];?></option>
   <?php }
   ?>
  </select>
    </div><br>
    <div style=" margin-left: 100px;" ><button type="submit" class="btn btn-primary" name="submit">Insert</button></div>

</form>