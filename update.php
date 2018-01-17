<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/16
 * Time: 下午 02:21
 */
include ("mysql_connect.inc.php");
$sql = "SELECT * FROM education";
$result = mysqli_query($link,$sql);
?>
    <h1>修改資料</h1>
<?php
while($row = mysqli_fetch_row($result)){
    ?>

    <form class="form-signin" action="update_finish.php" method="post">
        <input type="hidden" class="form-control" value='<?php echo $row[0] ?>' name="no">
        <input type="text" class="form-control" value='<?php echo $row[1] ?>' name="info">
        <button value="Sign In" class="btn btn-success btn-sm" >修改</button><br>
    </form>

<?php } ?>