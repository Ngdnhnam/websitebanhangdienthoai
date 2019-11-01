<?php
include("interface/config.php");
if(isset($_GET["trang"])){
	$page=$_GET["trang"];
}else {
	$page="";
}
if( $page=="" || $page==1 ){
	$trang1=0;
}else{
	$trang1=($page*16)-16;
}

$sql="select * from chitiethang limit $trang1,16";
$run=mysqli_query($conn,$sql);

?>
<div class="row">
	<div class="col-md-12 bg-warning" style="text-align: center;"> Tất Cả Sản Phẩm</div>
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

<div class="row" style="margin-top: 10px; ">
<?php while ($row_all=mysqli_fetch_array($run)) { ?>
	 <div class="col-md-3 bg-white">
		<img src="quantri/model/chitietsp/upload/<?php echo $row_all['hinhanh'];?>" width="80px" height="100px"><br>
		Sản Phẩm : <?php echo $row_all["tenchitiet"];?><br>
		 Giá : <?php echo $row_all["gia"];?><br>
		<a href="index.php?xem=thongtinsp&id=<?php echo $row_all['id_chitiet']?>">Xem chi Tiết</a>
	</div>
<?php }?>
</div>


<div class="row">
	<div class="col-md-12" style="margin-top: 50px; margin-left: 200px;">
	  <ul class="pagination">
		<?php
		   for($i=1; $i <=10; $i++) { 
		   	if($page==$i){	
		?>
	   <li class="page-item"><a class="page-link" style="background-color: red;"><?php echo $i; }else {?></a></li>
	   <li class="page-item"><a class="page-link" href="?trang=<?php echo $i; ?>"><?php echo $i;} }?></a>
    </li>
  </ul>
	</div>
</div>

