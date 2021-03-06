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
                <span style="color: #0b78ff">微處理器系統<img src="a0a592005e246aecfb30995b4a422845.gif" height="75" width="75"/></span>
            </h1>
            <p align="center">
                <span style="color:black">(Microprocessor Systems)</span>
            </p>
            <hr>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <tr><td width="14%"  class="td1"> 日 期 (Date)</td><td  class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td>2017/11/29</td><td>資工<font color=blue><b>3A</b></font>微處理器系統作業3實驗報告(每組一份)繳交期限: 2017/12/13 16:00以前。</td></tr>
                <tr><td>2017/11/29</td><td>資工<font color=blue><b>3A</b></font>微處理器系統作業4實驗報告(每組一份)繳交期限: 2017/12/27 16:00以前。</td></tr>
                <tr><td>2017/11/01</td><td><a href="Midterm.pdf" target="blank">第九週(資工<font color="red"><B>3A</B>:2017/11/15</font>)<font color="blue">期中考</font>考試規則及注意事項(簡易數位時鐘)</a>,(每組一份書面報告及每人個別口試)</td></tr>
                <tr><td>2017/10/15</td><td>資工<font color=blue><b>3A</b></font>微處理器系統作業2實驗報告(每組一份)繳交期限: 2017/11/15 16:00以前。</td></tr>
                <tr><td>2017/10/15</td><td>資工<font color=blue><b>3A</b></font>微處理器系統作業1實驗報告(每組一份)繳交期限: 2017/11/01 16:00以前。</td></tr>
                <tr><td>2017/9/22</td><td>資工<font color=red><b>3A</b></font>微處理器系統106年<font color=red><b>10月4日(星期三)中秋節</b></font>，當日放假一天。</td></tr>
                <tr><td>2017/09/05</td><td>請同學將實驗報告(含電路圖)及程式寄給助教(每組交一份), 微處理器系統助教的Email為<a href="mailto:rikki8051TA@gmail.com?subject=微處理器系統3A班第?次作業">rikki8051TA@gmail.com</a>(資工3A)。報告格式範例: <a href="repref.doc" target=_blank>實驗報告參考格式.doc</a> </td></tr>
                <tr><td>2017/09/05</td><td>單晶片8051實驗教室為資訊大樓<font color=red>I533</font>微算機系統實驗室，實驗課每位同學請攜帶備用隨身碟一隻(容量不限)。</td></tr>
                <tr><td>2017/09/01</td><td>大三微處理器系統(Microprocessor System)--上課時間地點(Class & Location):<br />資工CSIE <font color=blue><b>3A</b>: 每週三(WED)13:10-16:00在Room <font color=red><b>I533</b></font>教室。</font><br /></td></tr>


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

