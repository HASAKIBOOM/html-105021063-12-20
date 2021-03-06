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
                <span style="color: #0b78ff">計算機組織<img src="Alice_Sleeping.gif" height="75" width="75"/></span>
            </h1>
            <p align="center">
                <span style="color:black">(Computer Organization)</span>
            </p>
            <hr>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <tr><td width="14%"  class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td></td><td>*** 計算機組織<a >第1~3章習題補充講解參考</a></br>
                <tr><td>2017/11/01</td><td><font color=red><b>第九週(資電組11/16,數位組11/14)</font></b>資工3A計算機組織期中考，時間：<font color=red><b>9:30~11:00</b></font>，地點：上課教室，對號入座，筆試，開書考，考試範圍：第1 ~ 3章。</tr>
                <tr><td>2017/10/26</td><td>資工<font color=blue><b>3A</b></font>計算機組織(第1~8週)英文單字小考(資電組11/09,數位組11/07)下課前10分鐘。</td></tr
                <tr><td>2017/10/24</td><td>資工<font color=blue><b>3A</b></font>計算機組織作業二繳交期限:
                    <font color=red>資電組</font>11/16 12:00以前，<font color=red>數位組</font>11/14 12:00以前。 </td></tr>
                <tr><td>2017/10/01</td><td>資工<font color=blue><b>3A</b></font>計算機組織作業一繳交期限:
                    <font color=red>資電組</font>10/26 12:00以前，<font color=red>數位組</font>10/24 12:00以前。 </td></tr>
                <tr><td>2017/09/22</td><td>資工<font color=red><b>3A數位組</b></font>計算機組織106年<font color=red><b>10月10日(星期二)國慶日</b></font>，當日放假一天。</td></tr>
                <tr><td>2017/09/01</td><td>期中<font color=red>開書</font>考(30%)，期末<font color=red>開書</font>考(30%)，考試時間地點將於考前在課堂上及本網頁公告。</td></tr>
                <tr><td>2017/09/01</td><td>請同學在期限內將計算機組織作業<U>紙本交給老師</U>或<U>電子檔Email寄</U>到<br /><a href="mailto:TA1.rikki@gmail.com?subject=資工3A資電計算機組織第x次作業">TA1.rikki@gmail.com</a>(資工3A資電組),   &nbsp;&nbsp;  <a href="mailto:TA2.rikki@gmail.com?subject=資工3A數位計算機組織第x次作業">TA2.rikki@gmail.com</a>(資工3A數位組)。</td></tr>
                <tr><td>2017/09/01</td><td>資工3A計算機組織--上課地點在<font color=red><b>I309</b></font>教室(資電組/週四9:10-12:00), <font color=red><b>I310</b></font>教室(數位組/週二9:10-12:00)。<br />

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

