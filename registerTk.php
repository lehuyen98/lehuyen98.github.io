
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
        <h2 class="login-title">- Please Register -</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <form  method="POST" id="action-form">
                    <div class="input-group login-userinput">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input id="txtUser" type="text" class="form-control" name="hoten" placeholder="Họ Tên">
                    </div>
                    <div class="input-group login-userinput">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input id="txtUser" type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="input-group login-userinput">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input id="txtUser" type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input id="txtPassword" type="password" class="form-control" name="password" placeholder="Password">
                        <span id="showPassword" class="input-group-btn">
                            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </span>
                    </div>
                    <input id="btn-dangki" class="btn btn-primary btn-block login-button" type="submit" value="Đăng kí" onclick="checkpass()"></input>
                    <div class="checkbox login-options">
                        <a href="login.php" class="login-forgot">Đă có tài khoản, đăng nhập ngay ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/main.js"></script>
    <script>
        function checkpass() {
            var pass = $("#txtPassword").val();
            if (pass.length <= 3) {
                alert("Mat khau khong duoc it hon 3 ki tu");
            }
            else{
                $("#action-form").attr("action","register_exce.php");
            }
        }
    </script>
</body>
</html>