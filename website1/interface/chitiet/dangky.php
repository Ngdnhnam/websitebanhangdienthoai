
<div class="row">
	      <div class="col-md-6 bg-white" style=" margin-top: 50px; margin-left: 200px; ">
	      <h1 style="text-align: center;"> <span class="badge badge-warning">ĐĂNG KÝ THÔNG TIN</span></h1>
	 <form action="index.php?xem=dangky" class="was-validated" method="POST" >
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">có giá tri !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">có giá trị !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <div class="form-group">
      <label for="uname">gmail:</label>
      <input type="email" class="form-control" placeholder="Enter mail" name="mail" required>
      <div class="valid-feedback">có giá tri !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <div class="form-group">
      <label for="uname">Số Điện Thoại:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter numberphone" name="sdt" required>
      <div class="valid-feedback">có giá tri !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <div class="form-group">
      <label for="uname">Đia Chỉ:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter diachi" name="diachi" required>
      <div class="valid-feedback">có giá tri !</div>
      <div class="invalid-feedback">vui lòng điền vào ô này! cảm ơn.</div>
    </div>
    <button style=" width: 200px; margin-bottom: 10px; margin-left: 100px;" type="submit" class="btn btn-primary bg-warning" name="submit">Login</button>
  </form>
 </div>
 </div>

 <?php
  if(isset($_POST["submit"])){
    $use=$_POST["uname"];
    $pass=$_POST["pswd"];
    $mail=$_POST["mail"];
    $sdt=$_POST["sdt"];
    $diachi=$_POST["diachi"];

    $sql="select * from dangky where username='$use'";
    $kt=mysqli_query($conn,$sql);
    if(mysqli_num_rows($kt)>0){
      echo "<script>alert('tài khoản đã tồn tại mong bạn đăng ký lại');</script>";
    }
    else{
      $sql1="INSERT INTO dangky(username,password,diachi,sdt,gmail) VALUES('$use','$pass','$diachi','$sdt','$mail')";
      mysqli_query($conn,$sql1);
     header("location:index.php?xem=dangnhaptt");
    }
  }
 ?>