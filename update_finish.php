<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/16
 * Time: 下午 02:22
 */
include ("mysql_connect.inc.php");
?>

<?php
$No = $_POST['no'];
$info = $_POST['info'];
$sql = "update education set Info = '$info' where `No` = '$No'";
//echo $sql;
if($_SESSION['username'] != null)
{
if(mysqli_query($link,$sql)){

    echo "修改成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=seven.php>';
}}
else{
    echo "修改失敗!";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=update.php>';
}
?>