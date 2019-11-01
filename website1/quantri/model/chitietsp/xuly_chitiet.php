<?php
 $tenmaychu="localhost";
 $tentaikhoan="root";
 $matkhau="";
 $csdl="banhang";
 $conn= mysqli_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl) or die("không kết nối đươc");
 mysqli_query($conn,"SET NAMES 'UTF8'");
 //thêm dữ liệu
if(isset($_POST["submit"])){
	$ten_thietbi=$_POST["ten"];
	$gia_thietbi=$_POST["gia"];
	$imgs=$_FILES["anh"] ["name"];
    $img_tmp=$_FILES["anh"] ["tmp_name"];
    move_uploaded_file($img_tmp,"upload/".$imgs);
	$mota_chitiet=$_POST["mota"];
	$thutu_chitiet=$_POST["ttu"];
	$id_chitiet=$_POST["id"];
	$hang=$_POST["hang"];

	$sql_chitiet="select * from chitiethang where tenchitiet='$ten_thietbi'";
	$kt_chitiet=mysqli_query($conn,$sql_chitiet);
	if(mysqli_num_rows($kt_chitiet)>0){
		echo '<script>confirm("tên sản phẩm đã có");</script>';

	}else {
		$sql="INSERT INTO chitiethang(tenchitiet,gia,hinhanh,mota,thutu,id_loai,hangthietbi) VALUES('$ten_thietbi','$gia_thietbi','$imgs','$mota_chitiet','$thutu_chitiet','$id_chitiet','$hang')";
		mysqli_query($conn,$sql);
		header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet");

	}

}
//sua dữ liệu
else if(isset($_POST["n_sua"])){
	$ten_thietbi=$_POST["ten"];
	$gia_thietbi=$_POST["gia"];
	$imgs=$_FILES["img"] ["name"];
    $img_tmp=$_FILES["img"] ["tmp_name"];
    move_uploaded_file($img_tmp,"upload/".$imgs);
	$mota_chitiet=$_POST["mota"];
	$thutu_chitiet=$_POST["ttu"];
	$id_chitiet1=$_POST["id_loai"];
	$hang1=$_POST["hangtbi"];
	$id=$_GET["id"];
	if($imgs!= null){
         $sql1=" UPDATE chitiethang SET tenchitiet= '$ten_thietbi' ,gia= '$gia_thietbi', hinhanh= '$imgs', mota='$mota_chitiet', thutu= '$thutu_chitiet',id_loai= '$id_chitiet1',hangthietbi='$hang1' where id_chitiet='$id'  ";
    }
    else{
        $sql1=" UPDATE chitiethang SET tenchitiet='$ten_thietbi' ,gia='$gia_thietbi', mota='$mota_chitiet', thutu='$thutu_chitiet',id_loai='$id_chitiet1',hangthietbi='$hang1' where id_chitiet='$id'  ";
    }
     mysqli_query($conn,$sql1);
     header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet&id=".$id);
 }
 //xóa dữ liệu
else{
  	$id=$_GET["id"];
  	$sql_xoa="delete from chitiethang where id_chitiet='$id' ";
  	mysqli_query($conn,$sql_xoa);
  	header("location:../../index.php?xem=thongtinsanpham&ac=insert_chitiet");
}


?>