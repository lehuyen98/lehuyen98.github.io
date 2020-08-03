<?php
    require('hea.php');
    include("../lib.php");
    $sql="select phuongan1.id1,cauhoi1.cauhoide1,phuongan1.a,phuongan1.b,phuongan1.c,phuongan1.d from cauhoi1,phuongan1 where cauhoi1.id1=phuongan1.id1 order by id1 desc";
    $result = exec_select($sql);
?>
    <div id="wrapper">
        <table>
            <tr>
                <td colspan="5"></td>
                <td colspan="2"><a href="add_monhoc.php">Thêm Câu Hỏi</a></td>
            </tr>
            <tr style="background:#0f6; color:#fff;">
                <th style="width:50px;">STT</th>
                <th style="width:150px;">Tiêu đề</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th style="width:50px;">Delete</th>
            </tr>
            <tr>
            <?php foreach ($result as $item)
              {   $stt=0; ?>
                <?php
                echo"<tr>";
                echo"<td>$stt</td>";
                echo"<td ><textarea cols='20' rows='5' name='txtnd'>$item[cauhoide1]</textarea></td>";
                echo"<td>$item[a]</td>";
                echo"<td>$item[b]</td>";
                echo"<td>$item[c]</td>";
                echo"<td>$item[d]</td>";
                echo"<td> <a href='del_dethi.php?id=$item[id1]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                echo"</tr>";
                $stt++;
                }
            ?>
        </table>
    </div>
<?php
    require('foot.php');
?>