<?php
    $id=$_GET["id"];
    require("../lib.php");
    $sql="delete from reply where rep_id=$id";
    $sql1="delete from comment where cm_id=$id";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql1);
    mysqli_close($conn);
    header("location:list_comment.php");
    exit();

?>