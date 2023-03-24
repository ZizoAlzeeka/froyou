<?php

session_start();
 

if(!isset($_SESSION['user'])){
header("location:index.php");
exit();


}





?>








<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="هلا والله">
    <meta name="description" content="">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="الصفحة-الرئيسية.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.6.16, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "https://www.google.com/imgres?imgurl=https%3A%2F%2Fpng.pngtree.com%2Fpng-vector%2F20190828%2Fourlarge%2Fpngtree-for-you-logo-design-calligraphy-lettering-vector-illustration-png-image_1707282.jpg&tbnid=8mSGnkO9ILEW9M&vet=12ahUKEwj5w9SQi-n9AhUvUaQEHdNnBPEQMygCegUIARCzAQ..i&imgrefurl=https%3A%2F%2Far.pngtree.com%2Ffreepng%2Ffor-you-logo-design-calligraphy-lettering-vector-illustration_4992819.html&docid=JCl8UeIGzgp1dM&w=640&h=640&q=logo%20foryou%20png&ved=2ahUKEwj5w9SQi-n9AhUvUaQEHdNnBPEQMygCegUIARCzAQ",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="الصفحة الرئيسية">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="الصفحة الرئيسية">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="الصفحة-الرئيسية.html" data-home-page-title="الصفحة الرئيسية" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-ab0e"><div class="u-clearfix u-sheet u-sheet-1" >
   
    <a href="https://nicepage.com" class="u-image u-logo u-image-1">
         
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-text-font u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#" style="padding: 10px 80px; text-shadow: -2px 0px 8px rgba(128,128,128,1);">الصفحة الرئيسية</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#chapter" style="padding: 10px 80px; text-shadow: -2px 0px 8px rgba(128,128,128,1);">الفصول</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#homework" style="padding: 10px 80px; text-shadow: -2px 0px 8px rgba(128,128,128,1);">الواجبات</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#services" style="padding: 10px 80px; text-shadow: -2px 0px 8px rgba(128,128,128,1);">الخدمات </a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">الصفحة الرئيسية</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#chapter">الفصول</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#homework">الواجبات</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#services">الخدمات </a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-6d00">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-3 u-border-palette-3-light-1 u-container-style u-custom-color-2 u-group u-radius-10 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 style="margin-left: -10px;color: white;text-align: center;">FOR YOU &#x2665;</h1><br>
            <h3 style="margin-left: -10px;color: white;text-align: center;">منصة موثوقة تقدم خدمات تعليمية</h3><hr>
            <h1 style="margin-left: -10px;color: white;text-align: center;">&#x2665; هلا والله </h1>
            <div class="u-container-style u-group u-radius-10 u-shape-round u-white u-group-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h4  style="text-align: center;">&#x2665; <?php echo $_SESSION['user']['name']; ?> &#x2665;</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" src="" id="carousel_ae88" style="text-lagin:center;">
      <img class="u-expanded-width u-image u-image-1" src="https://files-prod.tii.ae/2022-03/Quantum%20Search%20for%20Scaled%20Hash%20Function%20Preimages.jpg" data-image-width="1990" data-image-height="1100">
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
             <a href="chapters/chapter1.php"> <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1380" data-image-height="927" src="https://t3.ftcdn.net/jpg/04/04/55/62/240_F_404556246_wzUy9XVbgxet7LI5XqgEb95zXh0jyY6l.jpg">
              </a>
            <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل الاول</h4>
              <p class="u-text u-text-default u-text-2"> Binary Systems </p></center>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
             
            <a href="chapters/chapter2.php"><img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1380" data-image-height="927" src="https://t3.ftcdn.net/jpg/04/04/55/62/240_F_404556248_TKb1oaokEfv7te9FwT6OprfQrVkxBuZV.jpg">
            </a>
            <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل الثاني</h4>
              <p class="u-text u-text-default u-text-2"> Boolean Algebra And Logic Gates </p></center></div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
            <a href="chapters/chapter3.php"><img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="1380" data-image-height="927" src="https://t3.ftcdn.net/jpg/04/04/55/62/240_F_404556272_ioGyvLhtOZXhEm0WoqGNIZOkr6JESGy0.jpg">
            </a>
            <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل الثالث</h4>
              <p class="u-text u-text-default u-text-2"> Gate – Level Minimization </p></center></div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
            <a href="chapters/chapter4.php"> <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="1380" data-image-height="927" src="https://t3.ftcdn.net/jpg/04/04/55/62/240_F_404556275_F8Un5FtwvSQKX5VATMGaBOczgVa1iAro.jpg">
            </a>
             <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل الرابع</h4>
              <p class="u-text u-text-default u-text-2"> Combinational Logic </p></center> </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
            <a href="chapters/chapter5.php"> <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="1380" data-image-height="927" src="https://t4.ftcdn.net/jpg/04/04/55/63/240_F_404556300_e8z6OQ08OdUZZHVem2uIo5fJXMc3QHBv.jpg">
            </a>
             <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل الخامس</h4>
              <p class="u-text u-text-default u-text-2"> Synchronous Sequential Logic </p></center></div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
            <a href="chapters/chapter6.php">  <img alt="" class="u-expanded-width u-image u-image-default u-image-7" data-image-width="1380" data-image-height="927" src="https://t4.ftcdn.net/jpg/04/04/55/63/240_F_404556302_nbLEPJBpu9YmuHMHC1XeOb4UW8i3M7t0.jpg">
            </a>
             <center><h4 class="u-text u-text-default u-text-1" id="chapter"> الفصل السادس</h4>
              <p class="u-text u-text-default u-text-2"> Registers and Counters </p></center></div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-3" src="" id="sec-24b1">
      <img class="u-expanded-width u-image u-image-1" id="homework" src="https://img.freepik.com/premium-vector/neon-notepad-with-pencil-outline-icon-neon-style-elements-education-illustration-line-icon-sig_104045-2531.jpg" data-image-width="1990" data-image-height="1100">
      <h3 style="color: white;width: 50%;text-align: center;background: #431f8d;border-radius: 20px;margin: 10px auto;">حاليا لا يوجد أي واجبات</h3>
      <!--<div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1380" data-image-height="927" src="/images/2.jpg">
              <h4 class="u-text u-text-default u-text-1"> CrossFit</h4>
              <p class="u-text u-text-default u-text-2"> Functional fitness that combines kettlebell training, Olympic weightlifting, gymnastics, medicine ball throws, dumbbell training, plyometrics, power-lifting, rowing, running, &amp; jumping rope.</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1380" data-image-height="927" src="/images/1.jpg">
              <h4 class="u-text u-text-default u-text-3"> Personalized Training</h4>
              <p class="u-text u-text-default u-text-4"> Our 1-on-1 training classes allow us to customize your routine to help you achieve your goals on an accelerated timeline while taking into account injuries, concerns, &amp; other factors.</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="1380" data-image-height="927" src="/images/3-6.jpg">
              <h4 class="u-text u-text-default u-text-5"> Foundations</h4>
              <p class="u-text u-text-default u-text-6"> New to CrossFit? Learn the core movements &amp; functional fitness concepts necessary to excel in CrossFit classes.&nbsp; Experienced CrossFitters can also refresh themselves to maximize their workouts.</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="1380" data-image-height="927" src="/images/3-6.jpg">
              <h4 class="u-text u-text-default u-text-7"> Foundations</h4>
              <p class="u-text u-text-default u-text-8"> New to CrossFit? Learn the core movements &amp; functional fitness concepts necessary to excel in CrossFit classes.&nbsp; Experienced CrossFitters can also refresh themselves to maximize their workouts.</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="1380" data-image-height="927" src="/images/3-6.jpg">
              <h4 class="u-text u-text-default u-text-9"> Foundations</h4>
              <p class="u-text u-text-default u-text-10"> New to CrossFit? Learn the core movements &amp; functional fitness concepts necessary to excel in CrossFit classes.&nbsp; Experienced CrossFitters can also refresh themselves to maximize their workouts.</p>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-7" data-image-width="1380" data-image-height="927" src="/images/3-6.jpg">
              <h4 class="u-text u-text-default u-text-11"> Foundations</h4>
              <p class="u-text u-text-default u-text-12"> New to CrossFit? Learn the core movements &amp; functional fitness concepts necessary to excel in CrossFit classes.&nbsp; Experienced CrossFitters can also refresh themselves to maximize their workouts.</p>
            </div>
          </div>
        </div>
      </div>-->
    </section>
    <section class="u-align-left u-clearfix u-section-4" src="" id="sec-71d6" dir="rtl">
      <img class="u-expanded-width u-image u-image-1" id="services" src="https://img.freepik.com/premium-photo/male-hand-touching-service-concept_220873-7591.jpg" data-image-width="1990" data-image-height="1100">
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1380" data-image-height="927" src="https://www.daftra.com/files/posts_images/637b8baca63aa_.webp">
              <h4 class="u-text u-text-default u-text-1"> حل واجبات وتكاليف</h4>
             </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-2">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1380" data-image-height="927" src="https://khamsat.hsoubcdn.com/images/services/906838/80e920ebd8116ceeacb2a56e4e9fe244.jpg">
              <h4 class="u-text u-text-default u-text-3"> إعداد بحوث</h4>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="1380" data-image-height="927" src="https://1.bp.blogspot.com/-hWGPW8mFy5E/YCmaGrseiTI/AAAAAAAAJmU/Avk_yLkpYSYXFY3hA18uHe4neXtogE6mgCLcBGAsYHQ/w600-h337-rw-e365/electricity-powerpoint-arabic.jpg">
              <h4 class="u-text u-text-default u-text-5"> برزنتيشن</h4>
              </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-4">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-5" data-image-width="1380" data-image-height="927" src="https://khamsat.hsoubcdn.com/images/services/983771/c6320f66c7275370a7b17cb408f14be4.jpg">
              <h4 class="u-text u-text-default u-text-7"> تلخيص كتب</h4>
             </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-5">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-6" data-image-width="1380" data-image-height="927" src="https://amp.gdoc.io/uploads/Architect-CV-1-712x984.jpg">
              <h4 class="u-text u-text-default u-text-9"> تصميم سيرة ذاتية</h4>
             </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-6">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-7" data-image-width="1380" data-image-height="927" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBHZ4DDufY7CUV5NCMMWy1rK_HZYFGjKKqrw&usqp=CAU">
              <h4 class="u-text u-text-default u-text-11"> عمل مشاريع</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-custom-color-2 u-footer u-footer" id="sec-bfd6"><div class="u-clearfix u-sheet u-sheet-1">
      <section class="contact">
      <h3>تحميل الملفات </h3>
      <a href="pdf/book.pdf" downlaod style="font-size:20px;color:yellow" >pdf التصميم الرقمي  المنطقي  <i class="fa fa-download" style="font-size:20px;color:yellow"></i></a>

      
       <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
        <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-2"></div>
        <header>
        &#x2665;  <p> طلابنا / طالباتنا الأعزاء تنمنى أن نكون قد استوفينا شرح هذا المقرر على الوجه المرضي سائلين المولى أن يوفقنا واياكم   </p>
           <p>المهندس : زكريا الشميري</p>
           
           <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
        <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-2"></div>
        <p> &#x2665; ننتظر استفساراتكم وأسئلتكم على الدوام </p>
          <h3>لمراسلتنا على مواقع التواصل الإجتماعي</h3>
        </header>
        
       
         <div class="social">
           
          <a href="https://wa.me/qr/23PJHZ6DTHWRP1" class="fa fa-whatsapp"></a>
          <a href="https://t.me/Alzeeka_321.com" class="fa fa-telegram"></a>
          <a href="https://www.snapchat.com/add/zizo_alzeeka?share_id=218nDywuaos&locale=en-US" class="fa fa-snapchat"></a>
         </div>
       
      </section>
        <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-1"></div>
        <div class="u-border-3 u-border-white u-line u-line-horizontal u-line-2"></div>
       
        <li class="u-small-text u-text u-text-variant u-text-2" style="list-style: none ; ">&copy; ALZEEKA 2023. All rights reserved.  <a style="display: block;" href="https://wa.me/qr/23PJHZ6DTHWRP1"> Design: Zizo Alzeeka</a></li>
       
      </div></footer>
    
  
</body></html>