<?php
require("hea.php");
$id=$_GET["id"];
$loi=array();
$loi['catename']=null; 
$catename=null;
if(isset($_POST['ok']))
    {
        if(empty($_POST["txtname"])){
            $loi["catename"]="*Vui lòng nhập tên chuyên đề";
        }else
        {
            $catename=$_POST["txtname"];
        }
        if($catename)
        {
            require('../lib.php');
            $sql="update chuyenmuc set tencm='$catename'where id_cm=$id";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("location:list_category.php");
            exit();
        }
    }

?>
    <div id="wapper2">
        <fieldset style="width:27px; margin=20px auto 10px;">
            <legend>Chỉnh sửa chuyên mục</legend>
            <form acction="edit_category.php?id=<?php echo$id ;?>" method="post">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" size="25px" value="<?php echo $data['tencm'];?>" name="txtname"/></td>
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