<?php
require("hea.php");
$loi=array();
$loi['catename']= $loi["catend"]=null;
$catename= $catend=null;
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
        if($catename && $catend)
        {
            require('../lib.php');
            $sql="insert into tintuc (ten_tt,noidung_tt)  values ('$catename','$catend')";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_ND.php");
            exit();
        }
    }
?>

<div id="wapper2">
<fieldset style="width:795px; margin=20px auto 10px;">
            <legend  style="width:120px;">Thêm Bài Viết</legend>
            <form acction="add_ND.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td style="width:90px;">Tiêu đề</td>
                        <td><textarea cols="55" rows="5" name="txtname"></textarea></td>
                    </tr>
                    <tr>
                        <td style="width:90px;">Nội dung</td>
                        <td><textarea cols="55" rows="5" name="txtnd"></textarea></td>
                    </tr>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'txtnd' );
                    </script>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ADD"name="ok"/></td>
                    </tr>
                </table>
                <div style="width:290px; margin:10px; text-align:center;color:red;">
                    <?php 
                        echo $loi["catename"];
                        echo $loi["catend"];
                    ?>
                </div>
            </form>
        </fieldset>
</div>

<?php
    require("foot.php");
?>