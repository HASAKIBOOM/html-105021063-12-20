<?php session_start(); ?>
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
            <p><a href="#"></a></p>
            <p><a href="#"></a></p>
            <p><a href="#"></a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1 align="center">
                <span style="color: #0b78ff" >歡迎來到陳瑞奇老師<span style="color: #ff0024">の</span>
                    首頁<img src="ddb0008ccd5771baa78.gif" height="75" width="75"/></span>
            </h1>
            <p align="center">
                <span style="color:black">Welcome to Rikki Chen's Homepage</span>
            </p>
            <hr>
            <h3>公佈欄(Bulletin Board)</h3>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <tr><td width="14%" class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td>2017/11/18</td><td><font color=red><b>2017/12/02星期六(Saturday)</b></font>中亞聯合大學系統暨醫療體系運動大會(China Asia Associated University Games)  </td></tr>
                <tr><td>2017/11/01</td><td><font color=black><b>第九週(2017/11/13~11/18)期中考(Midterm)</b></font>  </td></tr>
                <tr><td>2017/10/04</td><td>10月4日(星期三)<font color=black><b>中秋節快樂(Happy Mid-Autumn Festival)</b></font>！</td></tr>
                <tr><td>2017/09/18</td><td>請益時間(Office Hours):  <br />Tue.(二) 13:10 – 16:00  &nbsp;&nbsp; Wed.(三) 9:10 – 12:00  &nbsp;&nbsp; Thu.(四) 13:10 – 16:00</td></tr>
                <TR><TD>2017/09/14</TD><TD>9/18開學日、開始上課，9/18~9/27日全校加退選。</TD></tr>
                <tr><td>2017/09/04</td><td><a href="http://www.asia.edu.tw/main.php?information/information_01/information_106y" target=blank>亞洲大學106學年度行事曆(2017 School Academic Year Calendar)</a></td></tr>
                <tr><td>2017/09/03</td><td><a href="coa106/coa.htm">計算機組織課程公告(Class: Computer Organization)</a></td></tr>
                <tr><td>2017/09/03</td><td><a href="mps106/mps.htm">微處理器系統課程公告(Class: Microprocessor System)</a></td></tr>

                </pre>
            </TABLE>


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
