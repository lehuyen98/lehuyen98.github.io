<?php
include("../lib.php");
// include("./checklogin.php");
// session_start();
// $user = checkLoggedUser();
//get input
// $sql="select ten_tt,noidung_tt from tintuc where id_tt=$id";
$id_tt = isset($_REQUEST["id_tt"]) ? $_REQUEST["id_tt"] : "";
$noidung_tt= isset($_REQUEST["noidung_tt"]) ? $_REQUEST["noidung_tt"] : "";
$ten_tt= isset($_REQUEST["ten_tt"]) ? $_REQUEST["ten_tt"] : "";

$tbl="theloai";
$data['noidung_tt']= $noidung_tt;
$data['ten_tt']= $ten_tt;
$cond= "id_tt={$id_theloai}";
//tao sql
$sql = data_to_sql_update($tbl,$data,$cond);
//print_r($sql);
//Thuc thi sql
$ret = exec_update($sql);
header("location:list_ND.php");
exit();
?>
    <div id="wapper2">
        <fieldset style="width:30px; margin=20px auto 10px;">
            <legend>Chỉnh sửa Nội dung</legend>
            <form acction="edit_ND.php?id=<?php echo $id ;?>" method="post">
                <table>
                    <tr>
                        <td style="width:100px;">Tiêu đề</td>
                        <td><textarea cols="105" rows="2" name="txtname"><?php echo $data['ten_tt'];?></textarea></td>
                    </tr>
                    <tr>
                        <td style="width:100px;">Nội dung</td>
                        <td><textarea cols="105" rows="5" name="txtnd"><?php echo $data['noidung_tt'];?></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update"name="ok"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
<?php
    require("foot.php");
?>