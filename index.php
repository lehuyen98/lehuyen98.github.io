<?php
if (isset($_GET["p"])) {
    $p = $_GET["p"];
} else {
    $p = "";
}
?>

<?php
include('heade.php'); ?>
<div class="wraper mt-3">
    <div class="content row">

        <?php
        include('content.php');
        // include('contentttt.php');
        include('sibar.php');
        // include('loginTK.php')
        ?>
    </div>
</div>
<?php include('footer.php');
?>