<?php
include("lib.php");
$sql = "select id_tt,ten_tt from tintuc order by id_tt desc";
$result = select_list($sql);
$sql1 = "select id_tt,ten_tt from tintuc order by luotxem desc ";
$result1 = select_list($sql1);

?>
<div class="col-md-4 rightContent">
  <div class="item_silebar">
    <div class="title_silebar">
      <img src="./image/title5.png" width="100%">
    </div>
    <div class="main_silebar">


      <?php foreach ($result as $item) { ?>
        <ul>
          <li><a href="tintuc_nd.php?id=<?php echo $item['id_tt'] ?>"> <?php echo $item['ten_tt'] ?></a></li>
        </ul>

      <?php } ?>
    </div>
  </div>

  <div class="item_silebar">
    <div class="title_silebar">
      <img src="./image/title6.png" width="100%" id="mt_10">
    </div>
    <div class="main_silebar">
      <?php foreach ($result1 as $item) { ?>
        <ul>
          <li><a href="tintuc_nd.php?id=<?php echo $item['id_tt'] ?>"> <?php echo $item['ten_tt'] ?></a></li>
        </ul>

      <?php } ?>
    </div>
  </div>
</div>