<?php
require("hea.php");
$id=$_GET["id"];
$loi=array();
$loi['catename']=$catend['catend']=null; 
$catename=$catend=null;
require('../lib.php');
$sql="select ten_tt,noidung_tt from tintuc where id_tt=$id";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
if(isset($_POST['ok']))
    {
        if(empty($_POST["txtname"])){
            $loi["catename"]="*Vui lòng nhập tiêu đề<br/>";
        }else
        {
            $catename=$_POST["txtname"];
        }
        if(empty($_POST["txtnd"])){
            $loi["catend"]="*Vui lòng nhập nội dung";
        }else
        {
            $catend=$_POST["txtnd"];
        }
        if(isset($catename) && isset($catend))
        {
            require('../lib.php');
            $sql="update tintuc set ten_tt='$catename', noidung_tt='$catend' where id_tt=$id";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_ND.php");
            exit();
        }
    }
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