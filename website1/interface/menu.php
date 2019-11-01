<?php session_start(); ?>
 <div class="row">
	<div class="col-md-12 bg-white">
	 <nav class="navbar navbar-expand-sm bg-light ">
	    <a class="navbar-brand" href="#">
         <img src="img/icon.png" alt="Logo" style="width:40px;">
        </a>
		<ul class="navbar-nav">
		   <li class="nav-item">
			  <a class="nav-link" href="index.php?">Trang Chủ</a>
			</li>
            <li class="nav-item">
			   <a class="nav-link" href="#">Giới Thiệu</a>
			</li>
		    <li class="nav-item">
			   <a class="nav-link" href="index.php?xem=dangky">Đăng Ký</a>
			</li>
			<li class="nav-item">
			   <a class="nav-link" href="index.php?xem=dangnhaptt">Đăng Nhập</a>
			</li>
		    <li class="nav-item">
			    <a class="nav-link " href="index.php?xem=giohang">Giỏ Hàng</a>
		    </li>
		    <li class="nav-item">
			    <a class="nav-link " href="#">Xin Chào: <?php  if(isset($_SESSION['login'])){
                          echo $_SESSION['login'];} 
			    ?></a>
		    </li>
	    </ul>
	    <form class="form-inline" action="index.php" method="POST" style="margin-left: 150px;">
			    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="tk" required="">
			    <button class="btn btn-success" type="submit" name="submit">Search</button>
		  </form>

	   </nav>
</div>
</div>