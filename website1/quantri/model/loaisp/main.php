<div class="row">
	<div class="col-md-4 bg-white">
    <?php 
    if(isset($_GET['ac'])){
    	$clik1=$_GET['ac'];
    }else{
    	$clik1="";
    }

    if($clik1=="insert"){
    	include("model/loaisp/insert.php");
    }
    if($clik1=="sua"){
    	include("model/loaisp/edit.php");
    }

    ?>

	</div>   
	<div class="col-md-8 bg-white">
		<?php 
        include("model/loaisp/listed.php");
		?>


	</div>   
 </div>