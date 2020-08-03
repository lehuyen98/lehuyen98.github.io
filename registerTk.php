<?php
include('account.php');
include('heade.php');
?>
<div class="dangnhap">
	<h2>Đăng Ký Tài Khoản</h2>
	<?php
	require_once("lib.php");
	if (isset($_POST["register"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password_1 = $_POST["password_1"];
		$password_2 = $_POST["password_2"];
		$verify = md5(rand(0, 1000));
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($password_1 != $password_2) {
			echo ("Mật khẩu không trùng nhau! ");
		} else {
			if ($username == "" || $password_1 == "" || $password_2 == "" ) {
				echo "Bạn vui lòng nhập đầy đủ thông tin! ";
			} else {
				$partten = "/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(\.[a-zA-Z]{2,12})+$/";
				if (!preg_match($partten, $subject, $matchs)) {
					echo  "Mail bạn vừa nhập không đúng định dạng ";
				} else {
					// Kiểm tra tài khoản đã tồn tại chưa
					$sql = "select * from users where username='$username'";
					$kt = mysqli_query($conn, $sql);

					if (mysqli_num_rows($kt)  > 0) {
						echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="registerTk.php";</script>';
						die();
					} else {
						$password = md5($password_1);
						//thực hiện việc lưu trữ dữ liệu vào db
						$sql = "INSERT INTO users(username, password,lever,verify,trangthai) VAlUES('$username', '$password','1','$verify','0')";
						// thực thi câu $sql với biến conn lấy từ file connection.php
						mysqli_query($conn, $sql);
						echo "Chúc mừng bạn đã đăng ký thành công,vui lòng vào mail để xác nhận!";
						sendmail($username, $verify);
					}
				}
			}
		}
	}
	?>
	<form method="Post" action="registerTk.php">
		<div class="input-group">
			<Lable style="margin-right: 10px;">Username</Lable><br />
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<Lable style="margin-right: 10px;">Password</Lable><br />
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<Lable style="margin-right: 10px;">Confirm Password</Lable><br />
			<input type="password" name="password_2">
		</div>
		<div class="input-group btn ">
			<button type="submit" name="register" class="btn" style="margin: 0px 30%; background-color: cadetblue;">Register</button>
		</div>
		<p>
			Already a member? <a href="loginTk.php">Sign in</a>
		</p>

	</form>
</div>
<?php
include('footer.php');
?>
<style>
	.dangnhap {
		border: 1px solid;
		width: 30%;
		margin: auto;
		text-align: center;
	}

	.input-group {
		margin: 5% 10%;
	}

	label {
		margin-right: 10px;
	}
</style>