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
                <span style="color: #0b78ff">多媒體網站技術應用<img src="source.gif" height="75" width="100"/></span>
            </h1>
            <p align="center">
                <span style="color:black">(Multimedia Web Technologies)</span>
            </p>
            <hr>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <tr><td width="5%" class="td1"> 日期(Date)</td><td class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td>2017/05/11</td><td><a href="2016_FinalProject.pdf">第18週資工<b>2A</b>多媒體網站技術期末考專題實作及注意事項</a>, 展示及口試時間:2017/6/23 12:00以前, 地點: H103   </td></tr>
                <tr><td>2017/04/21</td><td>調補課公告: 多媒體網站技術應用<font color=red>4/28(五)</font>老師因公差假調課，並於5/5、5/12、5/19第1節H103補課。</td></tr>
                <tr><td>2017/04/21</td><td>期中考實作: 考前10分鐘下載<a href="Midterm.zip">資工2A網站技術期中考檔案</a>(<font color="red"><b>不提供程式碼</b></font>)，將於期中考當時現場開放下載！&nbsp;&nbsp;&nbsp;H103備用主機: <a href="http://10.51.3.76/Midterm.zip">資工2A網站技術期中考檔案</a>(<font color="red"><b>與上面相同</b></font>)</td></tr>
                <tr><td>2017/04/08</td><td>期中考(2): <font color="red"><b>期中考實作(80%)</b></font>，時間<font color="red"><b>4/21(五)9:20-9:30</b></font>考前說明及題目下載，<font color="red"><b>9:30-11:30</b></font>期中考實作題，地點：<font color="red"><b>H103</b></font>，對號入座，實作，開書考(可帶個人光碟、隨身碟)，<font color="red"><b>不提供程式碼</b></font>有需要請自行事先準備，考試範圍：ASP.NET上課內容，考試期間<font color="red">網路關閉</font>。</td></tr>
                <tr><td>2017/03/31</td><td>期中考(1): <font color="red"><b>期中學習心得(20%)</b></font>，請同學參考<a href="MWTrepref.doc">期中學習心得報告格式(繁體版)</a> 撰寫A4一頁心得報告，於4/21(五)期中考當天12:00前繳交給老師(可提前繳交)，謝謝。</td></tr>
                <tr><td>2017/03/30</td><td><a href="ex05.zip">EX#5(練習五):下拉式選單、月曆與樸克牌範例(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.6MB)</td></tr>
                <tr><td>2017/03/20</td><td><a href="hw4.zip">HW#4(作業四): 訪客留言板範例練習(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.6MB)</td></tr>



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

