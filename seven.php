<?php session_start();
include ("mysql_connect.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rikki Chen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">陳瑞奇</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">首頁</a></li>
                <li><a href="four.php">簡歷</a></li>
                <li><a href="seven.php">著作</a></li>
                <li><a href="one.php">計算機組織</a></li>
                <li><a href="two.php">微處理器系統</a></li>
                <li><a href="three.php">資工１Ａ導生</a></li>
                <li><a href="five.php">無線網路</a></li>
                <li><a href="six.php">多媒體網站技術應用</a></li>
                <li><a href="RikkiRabit.pdf">瑞奇的煩惱</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($_SESSION['username'] != null){
                    echo "<li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> 登出</a></li>";
                }else{
                    echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> 登入</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">


            <button><a href="add.php">新增</a></button><br>
            <button><a href="update.php">修改</a></button><br>
            <button><a href="delete.php">刪除</a></button>

            <?php
            $sql = "SELECT * FROM education";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_row($result)){
                echo "<ul1>".$row[1]."</ul1><br>";
            }


            ?>



        </div>
        <div class="col-sm-8 text-left">
            <h1 align="center">
                <span style="color: #0b78ff">著作</span>
            </h1>
            <p align="center">
                <span style="color:black">(Rikky Works)</span>
            </p>
            　　　　　　
            <h1 align="center"><a href="work1.php">-->期刊論文<--</a></h1>
            <h2 align="center"><a href="work2.php">-->研究計畫<--</a></h2>
            <h3 align="center"><a href="work3.php">-->研討會論文<--</a></h3>



        </div>
        <div class="col-sm-2 sidenav">


        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p align="center">
        <span style="color: #ff8f02">任何建議請寄: <img src="p_email.gif" height="52" width="45"/>EMAIL : rikki@asia.edu.tw亞洲大學資工系 陳瑞奇(Rikki Chen, CSIE, Asia Univ.), 感謝您！</span>
    </p>
    <p align="center"><span style="color: #ff8f02">power @ by 105021063 彭明捷</span></p>
</footer>

</body>
</html>

