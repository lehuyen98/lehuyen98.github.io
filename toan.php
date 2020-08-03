<?php
include("lib.php");
$id = isset($_REQUEST["id_mh"]) ? $_REQUEST["id_mh"] : 0;
$sql = "select cauhoi1.id1,cauhoi1.cauhoide1,phuongan1.a,phuongan1.b,phuongan1.c,phuongan1.d from cauhoi1,phuongan1 where cauhoi1.id1=phuongan1.id1 and id_mh=$id  ORDER BY RAND() LIMIT 10";
$result = select_list($sql);
$stt = 1;
?>

<?php
if (isset($_POST['ook'])) {
    $arr = $_POST;
    $dung = 0;
    $sai = 0;

    foreach ($arr as $key => $value) {



        $sql2 = "select dapan1 from cauhoi1 where id1= $key limit 1";
        $result2 = select_list($sql2);
        if ($value == $result2['dapan1']) {

            $dung++;
        } else {

            $sai++;
        }
    }
    $tong = $dung + $sai;
    echo "<h2></br>Bạn đã làm đúng {$dung} trên {$tong}</h2>";
}
?>
<form method="post" action="">
    <div id="form1">
        <?php

        foreach ($result as $item) {
            echo "Câu " . $stt . ': ' . $item['cauhoide1'] . '</br>';
        ?>


            A- <input type="radio" name="<?php echo $item['id1']; ?>" value="a" /><?php echo $item['a']; ?><br />
            B- <input type="radio" name="<?php echo $item['id1']; ?>" value="b" /><?php echo $item['b']; ?><br />
            C- <input type="radio" name="<?php echo $item['id1']; ?>" value="c" /><?php echo $item['c']; ?><br />
            D- <input type="radio" name="<?php echo $item['id1']; ?>" value="d" /><?php echo $item['d']; ?><br />

        <?php
            $stt++;
        } ?>
        <input type="submit" name="ook" value="Nộp Bài" />
    </div>
</form>