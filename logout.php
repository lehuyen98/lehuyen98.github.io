<?php
session_start();
// include("../lib_db.php");
// include("../login/checklogin.php");
// clearLoggedUser();
$user= isset($_SESSION['user']);
if($user){
    unset($_SESSION['user']);
    unset($_SESSION['lever']);
   // session_destroy();

   // print_r("ákasicaso");
    print_r($user);
    header("Location:index.php");
}
else{
    echo("logout error");
}
?>