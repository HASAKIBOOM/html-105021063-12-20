<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/16
 * Time: 下午 02:21
 */
include ("mysql_connect.inc.php");
$info = $_POST['info'];
$sql = "insert into education (Info) values ('$info')";
if($_SESSION['username'] != null)
{
if(mysqli_query($link, $sql)){

    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=seven.php>';
}}
else{
    echo "新增失敗!";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=add.php>';
}
?>