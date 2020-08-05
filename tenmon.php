<?php
include("lib.php");
$sql = "SELECT * FROM monhoc limit 0,9 ";
$result = exec_select($sql);
?>
<?php
include('heade.php'); ?>
<div class="wraper mt-3">
  <div class="content row">

    <div class="col-md-8 leftContent ">
      <?php foreach ($result as $item) { ?>
        <a href="noidungmon.php?id_mh=<?php echo $item['id_mh'] ?>"><img src="./image/<?php echo $item['image_mh'] ?>" alt=""></a>
      <?php } ?>

    </div>
    <?php
    include('sibar.php');
    ?>
  </div>
</div>
<?php include('footer.php');
?>