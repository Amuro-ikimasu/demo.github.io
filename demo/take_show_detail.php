<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>任務詳情</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#header">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#intro">平台介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#services">案例分享</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#accordionOne">服務簡介</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#headingThree">平台優勢</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.html#projects">案例實拍</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">登入/註冊</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.html"><span class="item-text">會員登入</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="join.html"><span class="item-text">加入我們</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#footer">留言給我們</a>
                </li>

            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>任務詳細</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                    <a href="index.html">首頁</a><i class="fa fa-angle-double-right"></i><a href="client_member_temp.php">登入</a><i class="fa fa-angle-double-right"></i><a href="take_main.php">接案者</a> <i class="fa fa-angle-double-right"></i><a href="case_list.php">任務列表</a><i class="fa fa-angle-double-right"></i><span>查看詳情</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


  <?php
  require_once("connection.php");

  //取得要顯示之記錄
  $p_id = $_GET["p_id"];

  //建立資料連接
  $link = connect();

  //執行SQL查詢
  $sql = "SELECT * FROM `post` WHERE `p_id` = '$p_id'";
  $result = execute_sql($link, "ubuntu", $sql);
  

  echo "<table width='800' align='center' cellpadding='3'>";
  echo "<tr height='40'><td colspan='2' align='center'
            bgcolor='#d175a2'><font color='white'>
            <b>詳情</b></font></td></tr>";

  //顯示原任務的內容
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td bgcolor='#f0c9dc'>&nbsp;&nbsp;類型：" . $row["p_type"] . "　    ";
    echo "&nbsp;&nbsp;編號：" . $row["p_id"] . " 　   ";
    echo "&nbsp;&nbsp;價錢：" . $row["p_price"] ."元". " 　   ";
    echo "&nbsp;&nbsp;時間：" . $row["p_time"] . "         ";
    echo "&nbsp;&nbsp;地點：" . $row["p_location"] . "</td></tr>";
    echo "<tr height='40'><td bgcolor='ebb0cc'>";
    echo "&nbsp;&nbsp;備註: " . $row["p_remark"] . "</td></tr>";
    
    echo "<form method='POST' action='finish.php?buy=true.&p_id=" . $row["p_id"] ."&c_id=".$row["c_id"] . 
    "&p_price=" . $row["p_price"]. "' >";

    $link = connect();
    $quant = $row["p_quant"];

    if ($quant == 1) {

      echo "<div align='center'>" . "<input type='submit' value='我要接單'" . "<div><br><br>";
      $quant = 0;
      $sql5 = "UPDATE `post` SET `p_ordered`='1' AND `p_quant`='0' WHERE 1";
      execute_sql($link,"ubuntu",$sql5);

    } else {
      echo "<div align='center'>" . "<input type='submit' value='任務已被接走囉'  disabled='disabled' >" . "<div>";
    }
    echo "<tr>"."</tr>";
    echo "</form>";
  }

  echo "</table>";
  
  //釋放 $result 佔用的記憶體空間
  mysqli_free_result($result);
  ?>


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                    <a href="index.html">首頁</a><i class="fa fa-angle-double-right"></i><a href="client_member_temp.php">登入</a><i class="fa fa-angle-double-right"></i><a href="take_main.php">接案者</a> <i class="fa fa-angle-double-right"></i><a href="case_list.php">任務列表</a><i class="fa fa-angle-double-right"></i><span>查看詳情</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>關於屋幫兔</h4>
                        <p class="white">市場唯一結合居家清潔與寵物託管的媒合平台！<br>
                            提供您屋內清潔與毛小孩委託照顧的服務</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>留言給我們</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>  802高雄市苓雅區和平一路116號</li>
                            <li><i class="fas fa-phone"></i><a href="tel:077172930">  +07 717 2930</a></li>
                            <li><i class="fas fa-envelope"></i><a href="https://w3.nknu.edu.tw/zh/">  w3.nknu.edu.tw/zh/</a></li>
                        </ul> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

    
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>