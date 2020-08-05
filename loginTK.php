<?php
   include("lib.php");
   include("../web/admin/checklogin.php");
 
   $username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
   $password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";
   
   $error = '';
   $checkLogin = 1;
   $user = 0;
   if (isset($_REQUEST["username"])){
       $sql ="select * from users  where username='{$username}'";
       $user = select_one($sql);
       //print_r($user);exit();
       // k co user
       if (!$user){
           //thuc hien co user o day
           $checkLogin = 0;
           $error = 'Khong ton tai username';
       }else{
           //kiem tra pass
        if ($checkLogin){
            // echo $password;
            if(md5($password)!=$user['password'])
            {
                $checkLogin = 0;
                $error = 'Password khong dung';
            }
            else
            {
				setLoggedUser($user);
                session_start();
                $_SESSION['user'] = $user;
				$_SESSION['lever']= $user['lever'];
                if($_SESSION['lever']==2)
                {
                    header("Location:admin/list_user.php");
                    exit();
                }
               else
                {
                     header("Location:index.php");
                     exit();
                }

            }     		
       } 
    }         
}                                                                                                                                                                                                                      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container login-form">
        <h2 class="login-title">- Please Login -</h2>
        <div class="panel panel-default">
            <div class="panel-body">
            <?php  if ($error){ ?>
				<li><?php echo $error ;?></li>
				<?php } ?>
                <form method="POST">
                    <div class="input-group login-userinput">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input id="txtUser" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input id="txtPassword" type="password" class="form-control" name="password"
                            placeholder="Password">
                        <span id="showPassword" class="input-group-btn">
                            <button class="btn btn-default reveal" type="button"><i
                                    class="glyphicon glyphicon-eye-open"></i></button>
                        </span>
                    </div>
                    <input class="btn btn-primary btn-block login-button" value="Đăng nhập" type="submit" id="btnlogin">
                        </input>
                    <div class="checkbox login-options">
                        <a href="../index.php">Trở về trang chủ.</a>
                        <a href="register.php" class="login-forgot">Chưa có tài khoản, đăng kí ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>