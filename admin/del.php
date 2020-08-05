<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from users where (id=$id and lever=1)";
    $ret = exec_update($sql);
    header("location:list_user.php");
    exit();
?>