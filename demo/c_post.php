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
    <title>屋幫兔發派任務</title>
    
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
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">登入/註冊</a>
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
                    <h1>任務</h1>
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
                    <a href="index.html">首頁</a><i class="fa fa-angle-double-right"></i><a href="client_member_temp.php">登入</a><i class="fa fa-angle-double-right"></i><a href="client_main.php">案主</a><i class="fa fa-angle-double-right"></i><span>填寫任務</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div><br><br> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


  <!-- <table align="center">
    <tr>
      <td><a href="case.php">產品列表</a></td>
      <td><a href="shopping_car.php">檢視購物車</a></td>
      <td><a href="end.php">結帳</a></td>
    </tr>
  </table> -->
  
  <p align="center"><img src="images/forum.png"></p><br>

  <?php
  require_once("connection.php");
  ?>

    <!-- 顯示輸入新留言表單 -->
    <form name="myForm" method="POST" action="post.php">
      <table border="0" width="600" align="center" cellspacing="0">
        <tr bgcolor="#8093f1" align="center">
          <td colspan="2">
            <font color="white">請在此加入新的任務</font>
          </td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%" align="center">任務名稱</td>
          <td width="85%"><input name="p_name" type="text" size="50" required></td>
        </tr>
        <tr bgcolor="#84D7FF">
          <td width="15%" align="center">類型</td>
          <td width="85%">
            <input name="p_type" type="radio" size="50" value="到府清潔">到府清潔
            <input name="p_type" type="radio" size="50" value="專業除蟎">專業除蟎
            <input name="p_type" type="radio" size="50" value="寵物伴玩">寵物伴玩
            <input name="p_type" type="radio" size="50" value="遛狗散步">遛狗散步
          </td>
        </tr>
        <tr bgcolor="abe2ff">
          <td  align="center">時間</td>
          <td><input type="datetime-local" name="p_time"></td>
        </tr>
        <tr bgcolor="72DDF7" >
          <td  align="center">地點</td>
          <td>
            <input type="text" name="p_location">
          </td>
        </tr>
        <tr bgcolor="91caf2">
          <td  align="center">價錢</td>
          <td><input type="number" name="p_price"></td>
        </tr>
        <tr bgcolor="#D9F2FF" align="center">
          <td width="15%">備註</td>
          <td width="85%"  align="left"><textarea name="p_remark" cols="50" rows="5"></textarea></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
        </tr>

        <tr>
          <td colspan="2" height="40" align="center">
            <input type="button" value="發佈任務" onClick="check_data()">　
            <input type="reset" value="重新輸入">
          </td>
        </tr>
      </table>
    </form><br><br><br>
    <p align="center"><a href="index.html">回首頁</a></p>

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                    <a href="index.html">首頁</a><i class="fa fa-angle-double-right"></i><a href="client_member_temp.php">登入</a><i class="fa fa-angle-double-right"></i><a href="client_main.php">案主</a><i class="fa fa-angle-double-right"></i><span>填寫任務</span>
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
    <script type="text/javascript">
    function check_data() {
      if (document.myForm.p_name.value.length == 0)
        alert("名稱欄位不可以空白哦！");
      else if (document.myForm.p_type.value.length == 0)
        alert("任務類型欄位不可以空白哦！");
      else if (document.myForm.p_time.value.length == 0)
        alert("時間欄位不可以空白哦！");
      else if (document.myForm.p_location.value.length == 0)
        alert("地點欄位不可以空白哦！");
      else if (document.myForm.p_price.value.length == 0)
        alert("價錢欄位不可以空白哦！");
      else
        myForm.submit();
    }
    
  </script>
</body>
</html>