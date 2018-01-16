<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 11:13
 */
?>
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "105021063";
//資料庫管理者帳號
$db_user = "105021063";
//資料庫管理者密碼
$db_passwd = "#T7OcDaoL";
//對資料庫連線
$link = @mysqli_connect($db_server, $db_user, $db_passwd);
if(!@mysqli_connect($db_server, $db_user, $db_passwd))
    die("無法對資料庫連線");
//資料庫連線採UTF8
mysqli_query($link,"SET NAMES utf8");
//選擇資料庫
if(!@mysqli_select_db($link,$db_name))
    die("無法使用資料庫");
?>