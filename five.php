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
                <span style="color: #0b78ff">無線網路<img src="source%20(1).gif" height="75" width="100"/></span>
            </h1>
            <p align="center">
                <span style="color:black">(Wireless Networks)</span>
            </p>
            <hr>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <td width="5%" class="td1"> 日期(Date)</td><td class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td>2017/05/23</td><td>無線網路<font color=red><b>補考</b></font>在6/23(五)下午1:30-3:00，地點：I427，筆試，開書考。(可以補交作業及個別問題討論)    </td></tr>
                <tr><td>2017/05/23</td><td>資工<font color=red><b>2A</b></font>在<font color=red><b>6/16(五)下午1:30-3:00</b></font>無線網路<font color=red><b>期末考</b></font>，地點：<font color=red><b>I427</b></font>，範圍：第7章到第14章，筆試，開書考。 </td></tr>
                <tr><td>2017/05/23</td><td>資工<font color=blue><b>2A</b></font>無線網路(第10~17週)專業科目英文名詞小考日期6/9(五)下課前10分鐘。</td></tr>
                <tr><td>2017/05/23</td><td>資工<font color=blue><b>2A</b></font>無線網路作業四(HW#4)繳交期限<font color=red><b>6/9(五) 16:00</b></font>以前。</td></tr>
                <tr><td>2017/05/19</td><td>資工<font color=blue><b>2A</b></font>無線網路作業三(HW#3)繳交期限<font color=red><b>6/2(五) 16:00</b></font>以前。</td></tr>
                <tr><td>2017/04/10</td><td>調補課公告: 無線網路<font color=red>4/28(五)</font>老師因公差假調課，並於5/5、5/12、5/19第8節I427補課，謝謝。</td></tr>
                <tr><td>2017/04/10</td><td>資工<font color=red><b>2A</b></font>在<font color=red><b>4/21(五)13:30-15:00</b></font>無線網路<font color=red><b>期中考，地點：I427</b></font>，排座位入座。考試範圍：第一章到第六章，筆試，開書考。</td></tr>
                <tr><td>2017/03/31</td><td>資工<font color=blue><b>2A</b></font>無線網路(第1~8週)專業科目英文名詞小考日期4/14下課前10分鐘。</td></tr>
                <tr><td>2017/03/31</td><td>資工<font color=blue><b>2A</b></font>無線網路作業二(HW#2)繳交期限<font color=red><b>4/14(五) 16:00</b></font>以前。</td></tr>
                <tr><td>2017/03/10</td><td>資工<font color=blue><b>2A</b></font>無線網路作業一(HW#1)繳交期限<font color=red><b>3/24(五) 16:00</b></font>以前。 </td></tr>

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

