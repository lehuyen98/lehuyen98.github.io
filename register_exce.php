<?php
include("lib.php");
//get input
// $hoten = isset($_REQUEST["hoten"]) ? $_REQUEST["hoten"] : "";
$username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
$password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";
$pass= md5($password);
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$role = 1;

$tbl = "users";
$data = array();
// $data["hovaten"] = $hoten;
$data["username"] = $username;
$data["password"] = $pass;
$data["email"] = $email;
$data["lever"] = $role;

//print_r($data);
$sql = data_to_sql_insert($tbl, $data);
$ret = exec_update($sql);
if($ret){
    echo '<script type="text/javascript">';
    echo ' alert("Đăng kí thành công,đăng nhập ngay !")'; 
    echo '</script>';
    //Set Refresh header using PHP.
    header( "refresh:0.1;url=loginTK.php" );
}