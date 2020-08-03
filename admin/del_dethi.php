<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from phuongan1 where id1=$id";
    $sql1="delete from cauhoi1 where id1=$id";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("location:list_dethi.php");
    exit();

?>