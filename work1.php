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
                <span style="color: #0b78ff">期刊論文</span>
            </h1>
            <p align="center">
                <span style="color:black">(Journal Papers)</span>
            </p>

            <table align="center" border="1">

                <tr bgcolor="#faebd7">
                    <td>1</td>
                    <td>Visual Exploration Using Improved Moving Average Methods for Time Series Datasets, International Journal of Information and Management Sciences (IJIMS), submitted for publication, Jan. 2018. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>2</td>
                    <td>Development of a Counting System for Zinc-Rich Vegetarian Foods, Nutritional Sciences Journal (台灣營養學會雜誌), submitted for publication, Dec. 2017.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>3</td>
                    <td>A Simulation of Natural Wolfberry Recognition Based on Color Classification, ICIC Express Letters (ICIC-EL), vol. 10, no. 6, pp. 1273-1278, June 2016. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>4</td>
                    <td>Combination Therapy Using Chelating Agent and Zinc for Wilson's Disease, Journal of Medical and Biological Engineering (JMBE), vol. 35, no. 6, pp. 697-708, Dec. 2015.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>5</td>
                    <td>	王經篤, 蔣中凱, 陳瑞奇, "PubMed文獻之樣式歷史資料形狀查詢-藉由Haar小波," 資訊科技國際期刊(International Journal of Advanced Information Technologies;IJAIT), vol. 9, no. 2, pp. 67-76, Dec. 2015.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>6</td>
                    <td>A Systematic Review of Studies on Effectiveness and Safety of Commonly Used Medications for Treating Wilson's Disease, The Journal of Taiwan Association for Medical Informatics, vol. 24, no. 1, pp. 11-22, Mar. 2015.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>7</td>
                    <td>Optimized Packet Scheduling Management: Maximizing Bandwidth Utilization for Next-generation Mobile Multimedia Communications, Wireless Personal Communications, vol. 67, no. 3, pp. 613-630, Dec. 2012.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>8</td>
                    <td>Dynamic Classified Buffer Control for QoS-Aware Packet Scheduling in IEEE 802.16/WiMAX Networks,IEEE Communications Letters (ICL), vol. 14, no. 9, pp. 815-817, Sept. 2010. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>9</td>
                    <td>Implementation of a High-performance Assignment Scheme for Orthogonal Variable-Spreading-Factor Codes in WCDMA Networks, Asian Journal of Arts and Sciences (AJAS), vol. 1, no. 1, pp. 106-125, June 2010.</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>10</td>
                    <td>Partial Loss Probability of OVSF Single-code Assignment with Space-limited Batch Arrival Queues: M[2^X]/M/c/c, Journal of Information Science and Engineering, vol. 26, no. 1, pp. 267-278, Jan. 2010. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>11</td>
                    <td>	Adaptive Time-utility Function Scheme for Downlink Packet Scheduling in IEEE 802.16e/WiMAX Networks, Asian Journal of Health and Information Sciences (AJHIS), vol. 4, nos. 2-3, pp. 103-112, June 2009. <td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>12</td>
                    <td>陳瑞奇(Jui-Chi Chen), 楊偉儒(Wei-Zu Yang), "WiMAX無線系統OFDMA次載子配置之連線阻斷率分析(Analysis of Connection Blocking Probability for OFDMA Subcarrier Allocation in WiMAX Systems)," 台南大學理工研究學報第43卷第1期(Journal of Scientific and Technological Studies, vol. 43, no. 1), pp. 71-84, April 2009. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>13</td>
                    <td>Utilization Optimization for OVSF Single-code Allocation in WCDMA Networks,Journal of the Chinese Institute of Engineers, vol. 31, no. 6, pp. 1077-1081, Sept. 2008. </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>14</td>
                    <td>	Hui-Fuang Ng, and Hsin-Li Lin, "Utilization Optimization for OVSF Multi-code Assignment in WCDMA Networks, Asian Journal of Health and Information Sciences (AJHIS), vol. 2, nos. 1-4, pp. 49-65, 2007 </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>15</td>
                    <td>
                        Efficient Performance Management of Subcarrier-allocation Systems in Orthogonal Frequency-division Multiple Access Networks,Springer Lecture Notes in Computer Science, vol. 4238, pp. 412-421, Sept. 2006.
                    </td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>16</td>
                    <td>
                        Call Blocking Probability and Bandwidth Utilization of OFDM Subcarrier Allocation in Next-generation Wireless Networks, IEEE Communications Letters, vol. 10, no. 2, pp. 82-84, Feb. 2006.
                    </td>
                </tr>
            </table>





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

