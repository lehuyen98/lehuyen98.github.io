<?php
include("lib.php");
$id = isset($_REQUEST["id_mh"]) ? $_REQUEST["id_mh"] : 0;
$sql = "SELECT * FROM noidungmon WHERE id_mh = {$id} ";
$result = select_list($sql);
?>
<?php
include('heade.php'); ?>
<div class="wraper mt-3">
  <div class="content row">

    <div class="col-md-8 leftContent ">
      <?php foreach ($result as $item) { ?>
        <a href="chitietmon.php?id_ndm=<?php echo $item['id_ndm'] ?>"><img src="./image/<?php echo $item['image_ndm'] ?>" alt=""></a>
      <?php } ?>
    </div>
    <?php
    include('sibar.php');
    ?>
  </div>
</div>
<?php include('footer.php');
?>