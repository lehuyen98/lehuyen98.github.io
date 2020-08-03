<?php
    require('hea.php');
    include("../lib.php");
    $sql="select id_tt,ten_tt,noidung_tt from tintuc";
    $result = exec_select($sql);
?>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="3"></td>
                <td colspan="2"><a href="add_ND.php">Thêm Bài Viết</a></td>
            </tr>
            <tr style="background:#0f6; color:#fff;">
                <th style="width:50px;">STT</th>
                <th style="width:150px;">Tiêu đề</th>
                <th>Nội Dung</th>
                <th style="width:50px;">Edit</th>
                <th style="width:50px;">Delete</th>
            </tr>
            <tr>
            <?php foreach ($result as $item)
              {   $stt=0; ?>
              <?php
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td><b>$item[ten_tt]</b></td>";
                echo"<td><textarea cols='68' rows='7' name='txtnd'>$item[noidung_tt]</textarea></td>";
                echo"<td><a href='edit_ND.php?id=$item[id_tt]' style='color:#f3f'>Edit</a></td>";
                echo"<td><a href='del_ND.php?id=$item[id_tt]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                echo"</tr>";
                $stt++;
                }
            ?>
        </table>
    </div>
<?php
    require('foot.php');
?>