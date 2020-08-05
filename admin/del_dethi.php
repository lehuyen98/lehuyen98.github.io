<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from phuongan1 where id1=$id";
    $sql1="delete from cauhoi1 where id1=$id";
    $ret = exec_update($sql);
    header("location:list_dethi.php");
    exit();

?>