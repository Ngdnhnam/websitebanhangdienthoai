
	<div class="row">
	      <div class="col-md-6 bg-white" style=" margin-top: 50px; margin-left: 200px; ">
	      <h1 style="text-align: center;"> <span class="badge badge-warning">ĐĂNG NHẬP MUA HÀNG</span></h1>
	 <form  class="was-validated" method="POST" >
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
  
    <button style=" width: 200px; margin-bottom: 10px; margin-left: 100px;" type="submit" class="btn btn-primary bg-warning" name="sub">Login</button>
  </form>
 </div>
 </div>

 <?php
 if(isset($_POST["sub"])){
  $use=$_POST["uname"];
  $pass=$_POST["pswd"];
  $sql="select * from dangky where username='$use' and password='$pass'";
  $run=mysqli_query($conn,$sql);
  if(mysqli_num_rows($run)>0){
    $_SESSION["login"]=$use;
    header("location:index.php?xem=giohang");
  }
  else{
    "<script>alert('tài khoản hoặc mật khẩu không tồn đúng')</script>";
  }
 }



 ?>