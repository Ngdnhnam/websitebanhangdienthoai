<?php
include("model\config.php");
$sql_lietke="select * from loaihang order by id_loai desc";
$run_lietke = mysqli_query($conn,$sql_lietke);

?>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>id_loai</th>
        <th>Tên Thiết Bị</th>
        <th>Thứ Tự</th>
        <th colspan="2"> xự kiện </th>
      </tr>
    </thead>

 <?php
   $i= 0;
   while($rows_lietke = mysqli_fetch_array($run_lietke,MYSQLI_ASSOC)){
 // $row=mysqli_fetch_array($run_lietke,MYSQLI_NUM);
 // foreach ($row as $key => $value) {

 ?>
    <tbody>
      <tr>
        <td><?php echo $rows_lietke['id_loai']; ?></td>
        <td><?php echo $rows_lietke['tenthietbi']; ?></td>
        <td><?php echo $rows_lietke['thutu'];?></td>
        <td><a href="model/loaisp/xuly.php?id=<?php echo $rows_lietke['id_loai']; ?>"> 
          <img src="../img/xoa.png" alt="Logo" style="margin-left: 35px;">
        </td>
        <td><a href="index.php?xem=loaisanpham&ac=sua&id=<?php echo $rows_lietke['id_loai'];?>">
         <img src="../img/sua.png" alt="Logo" style="margin-left: 35px;">
        </td>
      </tr>
    </tbody>
 <?php 
  
  $i++;
} 

  ?>
  </table>