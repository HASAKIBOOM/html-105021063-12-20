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
                <span style="color: #0b78ff">研究計畫</span>
            </h1>
            <p align="center">
                <span style="color:black">(Research Grant)</span>
            </p>
            <table align="center" border="1">

                <tr bgcolor="#faebd7">
                    <td>1</td>
                    <td>2018年科技部專題計畫, "利用時間序列模型進行台灣癌症發生率及死亡率之趨勢分析與預測," 執行期間：2018/8/1~2019/7/31, 計畫編號：MOST 107-, 申請中。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>2</td>
                    <td>2018年科技部專題計畫, "整合於5G行動通訊中合作式感知無線電網路智慧型頻道配置演算法," 執行期間：2018/8/1~2019/7/31, 計畫編號：MOST 107-, 申請中。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>3</td>
                    <td>2017年科技部專題計畫(共同主持), "台灣地區威爾森氏症低銅飲食銅點數之研發與應用," 執行期間：2017/8/1~2018/7/31, 計畫編號：MOST 106-2314-B-468-004-, 執行中。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>4</td>
                    <td>2016年民間企業產學計畫, "中藥藥材零售管理資訊系統," 執行期間：2016/10/1~2017/9/31, 計畫編號：I105IB125。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>5</td>
                    <td>2016年科技部專題計畫, "利用電腦演算法從台灣食品營養成分資料庫推估國人素食飲食品質之最佳化," 執行期間：2016/8/1~2017/7/31, 計畫編號：MOST 105-2221-E-468-021-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>6</td>
                    <td>2015年科技部專題計畫, "從台灣食品營養資料庫推估及比較本地素食人口之營養素攝取與飲食建議," 執行期間：2015/8/1~2016/7/31, 計畫編號：MOST 104-2221-E-468-017-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>7</td>
                    <td>2015年民間企業產學計畫, "清水岩生態教育多媒體導覽系統," 執行期間：2015/6/1~2016/5/31, 計畫編號：I104IB095。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>8</td>
                    <td>2014年科技部專題計畫, "應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性(二)," 執行期間：2014/8/1~2015/7/31, 計畫編號：MOST 103-2221-E-468-002-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>9</td>
                    <td>2013年國科會專題計畫, "應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性(I)," 執行期間：2013/8/1~2014/7/31, 計畫編號：NSC 102-2221-E-468-010-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>10</td>
                    <td>2012年國科會專題計畫, "WiMAX網路支援行動遠距醫療照護之有效多媒體傳輸機制," 執行期間：2012/8/1~2013/7/31, 計畫編號：NSC 101-2221-E-468-003-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>11</td>
                    <td>2008年國科會專題計畫, "第四代行動通訊(II): 植基於OFDMA之WiMAX網路考慮傳輸服務品質的有效允入控制與封包排程器," 執行期間：2008/8/1~2009/7/31, 計畫編號：NSC 97-2221-E-468-003-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>12</td>
                    <td>2007年國科會專題計畫, "第四代無線行動網路正交分頻多工存取次載子資源有效配置技術與效能最 佳化," 執行期間：2007/8/1~2008/7/31, 計畫編號：NSC 96-2221-E-468-001-。</td>
                </tr>
                <tr bgcolor="#faebd7">
                    <td>13</td>
                    <td>2003年國科會專題計畫, "TD-SCDMA無線網路資源管理與頻道配置快速演算法之研究," 執行期間：2003/8/1~2004/7/31, 計畫編號：NSC 92-2213-E-235-002-。</td>
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

