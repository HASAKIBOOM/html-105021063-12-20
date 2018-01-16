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
                <span style="color: #0b78ff">研討會論文</span>
            </h1>
            <p align="center">
                <span style="color:black">(Conference Papers)</span>
            </p>
            <table align="center" border="1">

                <li><u>陳瑞奇</u>,莊政宏,王淨儀, "移動平均線平滑度與滯後性之研究--以政府開放資料之癌症數據為例," <i>2018資訊教育與科技應用研討會(IETAC 2018)</i>), 論文編號9, pp. 1–7, 審稿中, 修平科技大學, Mar. 30, 2018.
                    <li>莊政宏,蒙美津,梁文軒,<u>陳瑞奇</u>, "移動平均線在資料探勘數據視覺化上的應用," in <i>Proc. of 2017 IMP第二十三屆資訊管理暨實務研討會</i>, Session C1-208(資料探勘與企業應用), Paper ID: F05, pp. 1-12, 國立聯合大學, Dec. 9, 2017.
                    <li><u>陳瑞奇</u>, 王經篤,周仕敏,蒙美津, "從台灣食品營養資料庫推估與比較本地各類素食食物之特定營養素含量," <i>2017第43屆台灣營養學會年會暨學術研討會</i>, Session C (公共衛生營養組), 壁報論文發表(SC-11), p.222, 弘光科技大學, 台中, May 19-20, 2017.
                    <li><u>陳瑞奇</u>, 莊政宏, 王淨儀, 蒙美津, "素食食材、營養與健康－以台灣食品營養成分資料庫為例," in <i>Proc. of 2017休閒餐旅觀光教育全國學術研討會</i>, 論文口頭發表(三), p.53-63, 德霖技術學院, 新北市, 27-Apr. 28, 2017.
                    <li>蒙美津, 王經篤, 周仕敏, <u>陳瑞奇</u>, "素食民眾營養攝取分析與特定營養素之含量統計," <i>素食對健康與環境的影響研討會(台灣素食營養學會105年會)</i>, 壁報論文發表(p.51), 奇美醫學中心, 台南, Dec. 3, 2016.
                <li><u>陳瑞奇</u>, 李明芳, 曾聖勛, 蒙美津, "從台灣食品營養資料庫推估本地素食人口之營養素攝取狀況," <i>2016第42屆台灣營養學會年會暨學術研討會</i>, Session C (公共衛生營養組), 壁報論文發表(SC-23), 臺北醫學大學, 台北, May 20-21, 2016.
                <li>蒙美津, 張竣硯, 劉璦, 陳紓紋, <u>陳瑞奇</u>, "台灣常見素食飲食型態之營養攝取推估、比較及飲食建議," in <I>Proc. of 2016第十一屆國際健康資訊管理研討會(UHIMA 2016)</i>, Oral Session F4 (健康生活), pp. F4-1~F4-11, 台南市立安南醫院, 台南, April 23-24, 2016.
                <li>Cheng-Hung Chuang, <u>Jui-Chi Chen</u>, and Yi-Ching Tseng, "A Simulation of Natural Wolfberry Recognition Based on Color Classification," in <i> Proc. of the 28th Annual Conference of Biomedical Fuzzy System Association (BMFSA2015)</i>, pp. 289-292, Kumamoto, Japan, Nov. 21-22, 2015.
                <li>王經篤,蔣中凱,<u>陳瑞奇</u>, "樣式歷史資料之形狀查詢-藉由Haar小波," in <i>Proc. of AIT/CEF 2015 (2015年資訊科技國際研討會暨民生電子論壇)</i>, Oral Session 3(場次C8), pp. 1191-1198, 朝陽科技大學, 台中, April 24-25, 2015.
                <li><u>陳瑞奇</u>, 郭佳霖, 陳彥棠, "應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性," <i>2014科技部工程司醫工學門成果發表會暨生物醫學工程及醫材產業高峰論壇</i>, Poster: PP01, 國立陽明大學, 台北, Dec. 13, 2014.
                <li><u>陳瑞奇</u>,莊政宏,謝盛元,王經篤, "威爾森氏症常見藥物療法有效性及安全性之文獻回顧分析," in <i>Proc. of JCMIT2014 (2014年國際醫學資訊聯合研討會)</i>, Session C2(健康資訊分析處理), pp. 149-155, 國立台北護理健康大學, 台北, Nov. 15-16, 2014.
                <LI><U>陳瑞奇</U>, "搜尋生醫文獻資料庫探討威爾森氏症合併藥物療效與部分流行病學之統計研究," in <I>Proc. of UHIMA2014 (第九屆國際健康資訊管理研討會)</I>, Session A(醫療保健與健康生活), Paper no. 1233, pp. A-01.1 ~ A-01.6, 東海大學, 台中, June 13-14, 2014.
                <LI><U>陳瑞奇</U>, "罕見疾病威爾森氏症螯合劑與鋅鹽合併療效之系統性回顧調查," <I>The 2013 Annual Symposium on biomedical Engineering and Technology (2013生物醫學工程研討會)</I>, 生醫資訊Poster PB3-18, pp. PB3-18.1 - PB3-18.2, National Tsing Hua University, Hsinchu, Taiwan, Nov. 15-16, 2013.
                <LI>Hsing-Chung Chen, Neng-Yih Shih, Rizki Noviyanto, <U>Jui-Chi Chen</U>, "A Cooperative Bit-Map Routing Protocol in Ad Hoc Networks," in <I>Proc. of the 2013 Seventh International Conference on Complex, Intelligent, and Software Intensive Systems (CISIS2013)</I>, pp. 325 – 330, Taichung, Taiwan, July 3-5, 2013. (EI)
                <LI><U>陳瑞奇</U>,黃惠藩,陳興忠, "以二維馬可夫排隊模型分析WiMAX行動遠距醫療照護之多媒體傳輸效能," in <I>Proc. of the 2013 EMC Technology and Practice Symposium (2013全國電磁相容技術與實務研討會)</I>, Session TH-A2, pp. 5.1 - 5.7, National Changhua University of Education, Changhua, Taiwan, June 27-28, 2013.
                <LI>Hui-Fuang Ng, I-Ping Li, and <U>Jui-Chi Chen</U>, "Evaluation of Color Descriptors for Image Matching Under Changing Illumination Conditions," in <I>Proc. of the 2012 International Conference on Advanced Information Technologies and The Second National Conference on Web Intelligence and Applications (2012資訊科技國際研討會暨第二屆網路智能與應用研討會)</I>, Paper no. 120, Poster - P2, Chaoyang University of Technology, Taichung, Taiwan, Apr. 27-28, 2012.
                <LI><U>陳瑞奇</U>, Rizki Noviyanto, Rendabel Churniawan, 黃惠藩, "新世代多媒體行動網路頻寬利用率最佳化之封包排程管理," in <I>Proc. of the Workshop on Consumer Electronics (WCE 2011) 2011年民生電子研討會</I>, Session I-4 (Paper no. 230), pp. 149-157, 國立臺中技術學院, Nov. 11, 2011. [Best Paper Award]
                <LI>Hui-Fuang Ng, Tsang-Yu Chang, and <U>Jui-Chi Chen</U>, “Image Indexing with Illumination Invariant Color Centroids,” in Proc. of the 23rd IPPR Conference on Computer Vision, Graphics, and Image Processing, Session-B4, pp. B4-4.1 ~ B4-4.4,  Kaohsiung, Taiwan, Aug. 15-17, 2010.
                <LI><U>Jui-Chi Chen</U>, "An Efficient Batch-arrival Queueing Model for Evaluating WiMAX Packet Scheduling Systems," in <I>Proc. of the IET International Conference on Frontier Computing – Theory, Technologies and Applications (IET-FC2010)</I>, Session-84B3 (Paper no. 155), pp. 221-226, Providence University and Asia University, National Museum of Natural Science, Taichung, Taiwan, Aug. 4-6, 2010.
                <LI><U>陳瑞奇</U>, 黃惠藩, "考量WiMAX網路封包排程服務品質之緩衝區動態控制模型", in <I>Proc. of the 15th Mobile Computing Workshop (MC2010)第15屆行動計算研討會</I>, Session A3 (Paper no. 62), pp. 4.1-4.7, 國立臺中教育大學, May 28, 2010. [Best Paper Award]
                <LI>Hui-Fuang Ng, Tzu-Chin Chang, and <U>Jui-Chi Chen</U>, "Abnormality Detection in Video Surveillance Using Trajectory and Frame Features," in <I>Proc. of the 14th Conference on Artificial Intelligence and Applications (TAAI 2009)</I>, Session R3-08 (Paper no. 117), pp. 4.1-4.5, 台中朝陽科技大學, Oct. 31, 2009.
                <LI><U>陳瑞奇</U>, "WiMAX無線網路之可調適時間效用封包排程演算法," in <I>Proc. of 2008全國電信研討會(NST'2008)</I>, pp. PB1-25.1~PB1-25.5, 雲林虎尾科技大學, Dec. 5-6, 2008.
                <LI><U>Jui-Chi Chen</U>, Hsin-Li Lin, and Hui-Fuang Ng, "Adaptive TUF Packet Scheduling Scheme for OFDMA-based WiMAX Systems," in <I>Proc. of TANET'2008</I>, Session C5, pp. 469-474, 高雄義守大學, Oct. 20-21, 2008.
                <LI><U>陳瑞奇</U>, 黃惠藩, 施能義, "以正交分頻多工存取為基礎之WiMAX點對多點系統連線阻斷率," in <I>Proc. of 2007全國計算機會議(NCS'2007)</I>, vol. 4, Session C-1-1, pp. 1–8, 台中亞洲大學, Dec. 20-21, 2007.
                <LI>Hui-Fuang Ng, Hon-Wen Chen, <U>Jui-Chi Chen</U>, "Pose and expression invariant face recognition with one sample image per person," in <I>Proc. of National Computer Symposium 2007 (NCS’2007)</I>, vol. 3, Session D-1-3, pp. 1–8, Asia University, Taiwan, Dec. 20-21, 2007.
                <LI><U>陳瑞奇</U>,施能義, "下一代無線行動網路OFDMA次載子配置系統效能評估與頻寬利用率最佳化分析," in <I>Proc. of 2006全國電信研討會(NST'2006)</I>, Session B8, pp. B8.3.1–B8.3.6, Dec. 2006.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Efficient Performance Management of Subcarrier-allocation Systems in Orthogonal Frequency-division Multiple Access Networks," in <I>Proc. of the 9th Asia-Pacific Network Operations and Management Symposium (APNOMS'2006)</I>, vol. 4238, pp. 412-421, Busan, Korea, Sept. 2006. (EI)
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "M[X]/M/c/c Modeling on a 4G Wireless Resource-allocation System," in <I>Proc. of ISCOM'2005</I>, Session 17, pp. 17.2.1–17.2.4, Nov. 2005.
                <LI><U>陳瑞奇</U>,陳文賢, "Bandwidth Utilization and Call Blocking Probability of OVSF Single-code Allocation with a Partial-loss Batch-arrival Model," in <I>Proc. of TANET'2005</I>, p.91 abstract, Session N1, pp. N11.1–N11.5, Oct. 2005.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Performance Evaluation of Multicode Allocation System in WCDMA," in <I>Proc. of ICS'2004</I>, pp. 417–422, Dec. 2004.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Queueing Models for Performance Evaluation of 3G WCDMA OVSF Code-assignment Systems," in <I>Proc. of CREDIT'2004</I>, p. 88 abstract, Session 5C, pp. 5.1–5.8,June 2004.
                <LI><U>陳瑞奇</U>,陳文賢, "第三代無線行動通訊TD-SCDMA快速頻道配置演算法," in <I>Proc. of NCS'2003</I>, Session C3-1, pp. 807–814, Dec. 2003.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "A Fast Frequency Assignment Algorithm for TDMA/GSM Cellular Networks," in <I>Proc. of ICICS'2003</I>, pp. 1396–1401, Dec. 2003.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Ordered BFS Graph-coloring Algorithms for the Basis of Cellular Frequency Assignment," in <I>Proc. of TANET'2003</I>, pp. 507–512, Oct. 2003.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Queue-aided BLRU Scheme for Orthogonal Variable-Spreading- Factor Code Assignment in 3G WCDMA," in <I>Proc. of IEEE PIMRC'2003</I>, pp. 74–78, Sept. 2003. (EI)
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Implementation of an Efficient Channelization Code Assignment Algorithm in 3G WCDMA," in <I>Proc. of NCS'2001</I>, pp. E237–E244, Dec. 2001.
                <LI><U>Jui-Chi Chen</U> and Wen-Shyen E. Chen, "Efficient Best-fit LRU Scheme for OVSF Code Allocation in WCDMA," in <I>Proc. of ISCOM'2001</I>, p.106 abstract, Session 9, pp. 5.1–5.5, Nov. 2001.
                <LI><U>Richard Jui-Chi Chen</U> and Wen-Shyen E. Chen, "A Lower Bound on Blocking Probability of an OVSF Multi-code System in WCDMA," in <I>Proc. of IEEE 3Gwireless'2001</I>, pp. 820–825, May 2001.
                <LI><U>陳瑞奇</U>, 袁周, “以MS-Access設計財產管理系統之研製與評估,” <I>中州工商專科學校行政電腦化推展研討會</I>,  pp. 40–45, 台灣彰化, May 15, 1999.
                <LI>Chui-Chu Cheng, <U>Jui-Chi Chen</U>, and Chi-Yui Chiou, "Real Time VOD System Based on Multi-port Network and Hierarchical Storage Architecture," in <I>Proc. of 96'Second Workshop on Real-time and Media Systems</I>, pp. 49–57, July 1996.

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

