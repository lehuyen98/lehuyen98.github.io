<?php
    require('hea.php');
    include("../lib.php");
    $sql="select id,username ,lever from users";
    $result = exec_select($sql);
?>

    <div id="wrapper">
        <table>
            <tr style="background:#0f6; color:#fff;">
                <th>STT</th>
                <th>UserName</th>
                <th>Lever</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($result as $item)
              {   $stt=0; ?>
             <?php
             
                    echo"<tr>";
                        echo"<td>$stt</td>";
                        echo"<td>$item[username]</td>";
                       if($item['lever']==1)
                       {
                           echo"<td>Thành viên</td>";
                       }else
                       {
                           echo"<td>Admin</td>";
                       }
                        echo"<td><a href='del.php?id=$item[id]' onclick='return show_confirm()' style='color:#f3f'>Delete</a></td>";
                    echo"</tr>";
                    $stt++;
                    }
                   
            ?>
        </table>
    </div>
<?php
    require('foot.php');
?>