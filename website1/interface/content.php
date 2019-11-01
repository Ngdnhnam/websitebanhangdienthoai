
<div class="row">
  	<div class="col-md-3 bg-white">
         <div class="row">
            <div class="col-md-12 bg-danger" style="text-align: center;">SẢN PHẨM</div>
         </div> 
        <div class="row">
          <div class="col-md-12">
            	<?php
                  include("interface/danhsach/list.php");
            	?>	   
              </div> 
        </div>	
   </div>
   <div class="col-md-9 bg-white">
    	<?php
          if(isset($_GET["xem"])){
          	$chon=$_GET["xem"];
          }else{
          	$chon="";
          }

        if($chon=="sanpham"){
        	include("interface/chitiet/tensanpham.php");
        }
        elseif ($chon=="dangky") {
        	include("interface/chitiet/dangky.php");
        }
        elseif ($chon=="thongtinsp") {
        	include("interface/chitiet/thongtinsanpham.php");
        }
        elseif ($chon=="giohang") {
        	include("interface/chitiet/cart.php");
        }
        elseif($chon=="dangnhaptt"){
          include("interface/chitiet/thanhtoan.php");
        }
        elseif(isset($_POST["submit"])) {
          include("interface/chitiet/search.php");
        }
        elseif (isset($_POST["apple"])) {
          include("interface/chitiet/apple.php");
        }
        elseif (isset($_POST["samsung"])) {
          include("interface/chitiet/samsung.php");
        }
        elseif (isset($_POST["oppo"])) {
          include("interface/chitiet/Oppo.php");
        }
        elseif (isset($_POST["asus"])) {
          include("interface/chitiet/Asus.php");
        }
        else{
        	include("interface/chitiet/tatcasanpham.php");
        }


    	?>	   
    	</div> 
</div>