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
                <span style="color: #0b78ff">資工1A導生公告訊息<img src="555.gif" height="75" width="75"/></span>
            </h1>
            <p align="center">
                <span style="color:black">(Information for CSIE 1A Students)</span>
            </p>
            <hr>
            <hr width=80% align=center>
            <TABLE width="80%" border="1">
                <tr><td width="14%" class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)</td></tr>
                <tr><td>2017/10/25</td><td> 106/10/25(三)16:10-17:00學務課程活動:數位科技使用的自我探索，地點在I527(請帶原子筆)，請同學務必出席簽名,謝謝。</td></tr>
                <tr><td>2017/10/18</td><td> 106/10/18(三)16:10-17:00學務課程活動:大一資訊能力前測，地點等學校通知，請同學務必出席簽名,謝謝。</td></tr>
                <tr><td>2017/9/22</td><td>1.學校週邊有不明人士擅自拍攝過路女性(女同學)，甚至搭訕，請同學們提高警覺，注意個人安全，夜間在外行動儘可能結伴而行，若發現有類似情形，請速撥打校安中心電話（0919-555-445）或110報案。2.校園巡守隊提供夜間溫馨接送夜歸學生返回宿舍服務。夜歸同學如有需要，可預洽校安中心申請。接送服務時間：週一～週五19:00～22:00。～學務處　校安中心關心您～。</td></tr>
                <tr><td>2017/09/18</td><td>大數據科學家: <a href="https://www.youtube.com/watch?v=MIqBS4XZyO4" target=_blank>21世紀最性感職業</a>, <font color=red><b>程式設計</b></font>和<font color=red><b>統計學</b></font>要認真學喔!  </td></tr>
                <tr><td>2017/09/11</td><td>和你大學這四年有密切關係: <a href="http://csie.asia.edu.tw/attachments/article/43/106.pdf"  target=_blank>106學年度入學資工系學程規劃表</a>, 畢業條件。</b></font></td></tr>
                <TR><TD>2017/07/18</TD>
                    <TD>申請減免學雜費、就學貸款、校內外獎學金、兵役、平安保險、學生急難慰助與請假規定，請參考<A HREF="http://gcs.asia.edu.tw/bin/home.php" target=blank>生活輔導組</A>網站。</TD></tr>
                <TR><TD>2017/07/18</TD>
                    <TD>學生心理諮商與輔導，請參考<A HREF="http://care.asia.edu.tw/bin/home.php" target=blank>諮商輔導組</A>網站。</TD></tr>
                <TR><TD>2017/07/17</TD>
                    <TD>台灣氣候潮濕，容易過敏或氣喘，請參考<A HREF="http://www.asthma-edu.org.tw/" target=blank>氣喘與過敏防治</A>相關網站。</TD></tr>
                <TR><TD>2017/07/15</TD><TD>Please feel free to contact me if necessary!</tr>


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

