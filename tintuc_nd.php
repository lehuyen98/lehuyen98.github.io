<?php
include("lib.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select ten_tt,noidung_tt,id_tt from tintuc where id_tt=$id order by id_tt desc";
    $result = select_one($sql);
    // echo $result;
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
include('account.php');
include('heade.php'); ?>
<div class="wraper mt-3">
    <div class="content row">

        <div class="col-md-8 leftContent main_dt">
            <h1 class="dethi"><?php echo $result["ten_tt"] ?></h1>
            <p><?php echo $result['noidung_tt'] ?></p>
        </div>
        <?php
        include('sibar.php');
        ?>
    </div>
</div>
<?php include('footer.php');
?>