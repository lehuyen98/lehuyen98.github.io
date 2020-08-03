<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from users where (id=$id and lever=1)";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list_user.php");
    exit();
?>