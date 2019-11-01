<?php
include("model/config.php");
$sql_sua="select * from loaihang where id_loai='$_GET[id]'";
$run_sua=mysqli_query($conn,$sql_sua);
$row_sua=mysqli_fetch_array($run_sua);

?>


<form action="model/loaisp/xuly.php?id=<?php echo $row_sua['id_loai']; ?>" method="POST">
	<div>Sua thông Tin</div>
    <div class="form-group">
      <label for="email">Thiết Bị</label>
      <input type="text" class="form-control" name="text" value="<?php echo $row_sua['tenthietbi'];  ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Thứ Tự</label>
      <input type="text" class="form-control"  name="ttu" value="<?php echo $row_sua['thutu']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">edit</button>
</form>