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
            <h2 class="dethi">ĐỀ THI</h2>
            <?php
            include('toan.php'); ?>
        </div>
        <?php
        include('sibar.php');
        ?>
    </div>
</div>
<?php include('footer.php');
?>