<?php
include("lib.php");
$id = (isset($_REQUEST["id_ndm"]) ? $_REQUEST["id_ndm"] : 0);
if ($id < 1) {
  echo "SORRY";
  exit();
}
$sql = "SELECT * FROM chitietmon WHERE id_ndm ={$id} ";
$result = select_one($sql);
include('./admin/checklogin.php');
session_start();
// $user = checkLoggedUser();
$user= isset($_SESSION['user']);
if($user){
  $user= $_SESSION['user'];
}

?>

<style>
  .dethi {
    text-align: center;
    margin: auto;
    color: red;
    padding: 20px;
  }

  .main_dt {
    border: 1px solid;
    background-color: azure;
  }
</style>
<?php
include('heade.php'); ?>
<div class="wraper mt-3">
  <div class="content row">

    <div class="col-md-8 leftContent main_dt">
      <h1 class="dethi"><?php echo $result["tieude_ctm"] ?></h1>
      <p><?php echo $result['noidung_ctm'] ?></p>
    </div>
    <?php
    include('sibar.php');
    ?>
  </div>
</div>
<?php include('footer.php');
?>