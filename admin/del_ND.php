<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from tintuc where id1=$id";
    $ret = exec_update($sql);
    header("location:list_ND.php");
    exit();
?>