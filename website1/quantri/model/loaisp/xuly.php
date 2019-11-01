<?php
include("../config.php");
if(isset($_POST['sub'])){
	$ten=$_POST['text'];
	$thutu=$_POST['ttu'];
    $sql="select * from loaihang where tenthietbi='$ten'";
    $kt=mysqli_query($conn,$sql);
    if(mysqli_num_rows($kt)> 0){
    	echo '<script>confirm("Do you like freetuts.net");</script>';
    	//header("location:../../index.php?xem=loaisanpham&ac=insert");
    }
    else{
    	$sql="INSERT INTO loaihang(tenthietbi, thutu) VALUES ( '$ten', '$thutu')";
    	mysqli_query($conn,$sql);
    	header("location:../../index.php?xem=loaisanpham&ac=insert");
    }

}
elseif (isset($_POST["submit"])) {
    $tenloai=$_POST["text"];
    $thutu=$_POST["ttu"];
    $id=$_GET["id"];
    $sql_sua="update loaihang set tenthietbi='$tenloai',thutu='$thutu' where id_loai='$id'";
    mysqli_query($conn,$sql_sua);
    header("location:../../index.php?xem=loaisanpham&ac=insert&id=".$id);
}
 else{
        $id=$_GET["id"];
        $sql_xoa="Delete from loaihang where id_loai='$id'";
        mysqli_query($conn,$sql_xoa);
        header("location:../../index.php?xem=loaisanpham&ac=insert");
 }



?>