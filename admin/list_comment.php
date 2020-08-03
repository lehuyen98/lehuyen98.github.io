<?php
    require('hea.php');
    include("../lib.php");
    $sql="select cm_id,name,message,ten_tt from comment, tintuc where comment.id_tt=tintuc.id_tt  order by cm_id desc";
    $result = exec_select($sql);
?>
    <div id="wrapper">
        <table>
            <tr style="background:#0f6; color:#fff;">
                <th style="width:50px;">STT</th>
                <th style="width:300px;">Tin Tức</th>
                <th style="width:200px;">Name</th>
                <th>Nội Dung</th>
                <th style="width:80px;">Delete</th>
            </tr>
            <?php foreach ($result as $item)
              {   $stt=0; ?>
              <?php
                echo"<tr>";
                    echo"<td>$stt</td>";
                    echo"<td style='width:300px;'>$item[ten_tt]</td>";
                    echo"<td><b>$item[name]</b></td>";
                    echo"<td><textarea cols='50' rows='3' name='txtnd'>$item[message]</textarea></td>";
                    echo"<td><a href='del_cmt.php?id=$item[cm_id]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                echo"</tr>";
            $stt++;
            }
        ?>
        </table>
    </div>
<?php
    require('foot.php');
?>