<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from tintuc where id=$id";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_ND.php");
    exit();

?>