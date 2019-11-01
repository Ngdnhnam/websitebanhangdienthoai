
<?php
    include("interface/config.php");
    if(isset($_GET["add"]) && !empty($_GET["add"])){
    	$id=$_GET["add"];
      $_SESSION['cart'.$id] +=1 ;
      header("location:index.php?xem=giohang");
    }

    if(isset($_GET["down"])){
      $_SESSION['cart'.$_GET["down"]]--;
      header("location:index.php?xem=giohang");
    }
    if(isset($_GET["up"])){
      $_SESSION['cart'.$_GET["up"]]+=1;
      header("location:index.php?xem=giohang");
    }
    if(isset($_GET["delete"])){
      $_SESSION['cart'.$_GET["delete"]]="";
      header("location:index.php?xem=giohang");
    }

    $thanhtien=0;
    foreach ($_SESSION as $name => $value) {
    	if($value >= 1){
    	  if(substr($name,0,4)=='cart'){
     	  $id=substr($name,4,strlen($name));
          $sql="select * from chitiethang  where id_chitiet='".$id."'";
          $run=mysqli_query($conn,$sql);
          while ($row=mysqli_fetch_array($run)) {
          	 $tongtien=$row['gia']* $value;
?>
     <div class="row" style="border-style: solid; border-width: 1px;">
     	<div class="col-md-3" style="border-right: 1px solid black;">
     		 <img src="quantri/model/chitietsp/upload/<?php echo $row['hinhanh'];?>" width="30px" height="40px">
     	</div>
      <div class="col-md-2" style="border-right: 1px solid black;"><?php echo $row["tenchitiet"]; ?></div>
       <div class="col-md-1" style="border-right: 1px solid black;"><a href="index.php?xem=giohang&down=<?php echo $id; ?>"> - </a></div>
      <div class="col-md-1" style="border-right: 1px solid black;"> <?php echo $value; ?></div>
      <div class="col-md-1" style="border-right: 1px solid black;"><a href="index.php?xem=giohang&up=<?php echo $id; ?>"> + </a></div>
      <div class="col-md-2" style="border-right: 1px solid black;"><?php echo $tongtien; ?></div>
       <div class="col-md-2"><a href="index.php?xem=giohang&delete=<?php echo $id; ?>"> Delete </a></div>
     </div>

<?php
    }
   $thanhtien+=$tongtien;
   }
  }
}

if($thanhtien==""){
  header("location:index.php");
}
else{
?>
<div class="row">
  <div class="col-md-6">
    <h5 style="background-color: yellow; float: left; "> Tổng Tiền Là : 
    <?php echo $thanhtien." VND";} ?>
  </h5>
  </div>

  <div class="col-md-6">
    <a href="index.php?xem=dangnhaptt" style="float: right; background-color: pink; text-decoration: none;"> Thanh Toán</a>
  </div>
</div>

