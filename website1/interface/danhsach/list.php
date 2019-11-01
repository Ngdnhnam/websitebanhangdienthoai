
<div class="row">
	<div class="col-md-12">
	<div class="list-group">
		<?php
$sql="select * from loaihang";
$run=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($run)) {
	
?>
	    <a href="index.php?xem=sanpham&id=<?php echo $row['id_loai'];?>" class="list-group-item list-group-item-action"><?php echo $row["tenthietbi"]; }?></a>
	    
    </div>


	</div>
</div>

