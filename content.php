<?php
include("lib.php");
$sql = "SELECT * FROM monhoc limit 9,3 ";
$result = select_list($sql);
$sql1 = "SELECT * FROM monhoc limit 12,3 ";
$result1 = select_list($sql1);
$sql2 = "SELECT * FROM monhoc limit 15,3 ";
$result2 = select_list($sql2);

?>
<div class="col-md-8 leftContent">

  <div class="row item">
    <div class="col-md-6 dktaikhoan">
      <div class="titletk mb-5">
        <img src="./image/title7.png">
      </div>
      <div class="main_title">
        <a href="tenmon.php">
          <img src="./image/h4.png" alt="chuong trinh hoc" width="100%"></a>
      </div>
    </div>
    <div class="col-md-6 dktaikhoan">
      <div class="titletk mb-5"><img src="./image/title8.png"></div>
      <div class="main_title">
        <a href="ondaihoc.php">
          <img src="./image/h5.png" alt="chuong trinh hoc" width="100%"></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="title2 mb-5 ">
      <img src="./image/title2.png" width="100%">
    </div>
    <?php foreach ($result as $item) { ?>
      <a href="noidungmon.php?id_mh=<?php echo $item['id_mh'] ?>">
        <div class="col-md-4 ">
          <img src="./image/<?php echo $item['image_mh'] ?>">
        </div>
        <?php echo $item['ten_mh'] ?>
      </a>
    <?php } ?>

  </div>


  <div class="row">
    <div class="title2 mb-5">
      <img src="./image/title3.png" width="100%">
    </div>
    <?php foreach ($result1 as $item) { ?>
      <a href="noidungmon.php?id_mh=<?php echo $item['id_mh'] ?>">
        <div class="col-md-4 ">
          <img src="./image/<?php echo $item['image_mh'] ?>">

        </div>
        <?php echo $item['ten_mh'] ?>
      </a>
    <?php } ?>

  </div>


  <div class="row">
    <div class="title2 mb-5">
      <img src="./image/title4.png" width="100%">
    </div>
    <?php foreach ($result2 as $item) { ?>
      <a href="noidungmon.php?id_mh=<?php echo $item['id_mh'] ?>">
        <div class="col-md-4 ">
          <img src="./image/<?php echo $item['image_mh'] ?>">
        </div>
        <?php echo $item['ten_mh'] ?>
      </a>
    <?php } ?>
  </div>
</div>