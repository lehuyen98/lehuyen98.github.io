<?php
	session_start();
	$con=mysqli_connect('localhost','root','','onthi');
	if(!$con){
		die('ket noi that bai'.mysqli_connect_error());
	}
	$mesage;
	if(isset($_GET['email']) and isset($_GET['verify'])){
		$verify=$_GET['verify'];
		$sql="select * from users where email='$email' and verify='$verify'";
		$verifySelect= mysqli_query($con, $sql);
		if (mysqli_num_rows($verifySelect)) {
			$sqlUpdate="update users set trangthai=1 where email='$email' and verify='$verify' and trangthai=0";
			if(mysqli_query($con, $sqlUpdate)){
				echo "Tài khoản đã được kích hoạt thành công";
			}else
				echo "Lỗi";
		}else{
			echo"Url không hợp lệ hoặc bạn đã kích hoạt tài khoản của mình";
		}
	}else{
		echo "Làm ơn sử dụng liên kết đã được gửi đến email của bạn";
	}