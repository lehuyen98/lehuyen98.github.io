<?php
#echo "Trang index.php";exit();
include("lib.php");
$sql = "SELECT * FROM monhoc limit 0,9" ;
//echo $sql;exit();
$topnews = select_one($sql);
//print_r($topnews);	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="grid-container">
        <div>
                <p><?php echo $topnews["ten_mh"]?></p>
        </div>
        <div><p><?php echo $topnews["ten_mh"]?></p></div>
        <div><p><?php echo $topnews["ten_mh"]?></p></div>  
        <div><p><?php echo $topnews["ten_mh"]?></p></div>
        <div><p><?php echo $topnews["ten_mh"]?></p></div>  
        <div><p><?php echo $topnews["ten_mh"]?></p></div>
      </div>
</body>
</html>