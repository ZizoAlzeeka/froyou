

<?php
session_start();
/*if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}*/
if(isset($_POST['submit'])){
 include 'conn-db.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
  

   $errors=[];
   

  


   // validate password
   if(empty($password)){
        $errors[]="يجب كتابة  كلمة المرور ";
   }



   // insert or errros 
   if(empty($errors)){
   
    
        
		$stm="SELECT * FROM users WHERE password ='$password'";
		$q=$conn->prepare($stm);
		$q->execute();
        $data=$q->fetch(); 
        $_POST['name']='';
         
        if(!$data){
			$errors[] = "خطأ فى تسجيل الدخول";
         }
         
         else{


            $_SESSION['user']=[
                "name"=>$name,
               
                
              ];
              header('location:main.php');
         }
     
    
}
}
?>




<!DOCTYPE HTML>
<html dir="rtl" lang="ar">

<!-- Mirrored from mazn.co/introtops/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 20:26:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>تصميم رقمي   | for you &#x2665;</title>

<meta property="og:description" content="(شرح مقرر تصميم رقمي ( شروحات + حل تمارين + واجبات ">
<meta property="og:title"content="(شرح مقرر تصميم رقمي ( شروحات + حل تمارين + واجبات ">



<meta name="twitter:description" content="  شرح مقرر تصميم رقمي  شروحات + حل تمارين + واجبات ">

<link rel="stylesheet" href="assets/css/maind28d.css?v=1.8" />
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="assets/css/noscript.css" />
<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
<script src="assets/js/sweetalert2.all.min.js"></script>
<style>
			.swal2-styled {
				margin: .3125em;
    			padding: 0em 77px;
			}
			.swal2-styled.swal2-confirm {
				border-radius: 50px;
				background-color: #431f8d;
				font-family: 'Cairo', sans-serif;
			}
			.swal2-styled.swal2-cancel {
				border-radius: 50px;
				font-family: 'Cairo', sans-serif;
}
.swal2-popup {
    border-radius: 28px;
}.swal2-styled:focus {

    box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(60, 31, 99, 0.4);
}
.swal2-title {
    letter-spacing: -1px;
	margin: 0 0 0em;
}
.swal2-actions {
    margin: 1em auto 0;
}
input[type="checkbox"] + label:before, input[type="radio"] + label:before {
    right: 0;
    line-height: 2.0625em;
    position: absolute;
    text-align: center;
    top: 0;
}
input[type="checkbox"] + label, input[type="radio"] + label {
    padding-right: 2.4em;
    padding-left: 0.75em;

}

#login{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
		</style>
</head>
<body class="is-preload">

<div id="wrapper">

<header id="header" class="alt">
<h1 class="logo">    &#x2665;   for you    &#x2665;</h1>
<h1>تصميم رقمي</h1>
<h4>شرح مقرر تصميم رقمي( شروحات + حل تمارين + واجبات )</h4><br><hr>
</header>


<div id="main">
    <section id="content" class="main">


        <section class="main special">
            <header class="major">
            <h2>شرح تجريبي</h2>
            </header>
            <iframe width="560" height="315" style="max-width:94%;" src="https://www.youtube.com/embed/YHFhmaIu43k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br><hr>
            <ul class="list">
                <summary>يتضمن هذا الموقع </summary><hr>
                
                <li style="padding:10px;">شرح المقرر بالكامل &#x2713;</li>
                <li  style="padding:10px;">حل الواجبات أولا بأول &#x2713;</li>
                <li  style="padding:10px;">خدمات أخرى &#x2713;</li>
               
                <li></li>
            </ul><hr>
            <p class="price" style="padding:10px;">سعر الإشتراك شامل كل شروحات المقرر مع الواجبات ب <span>(   299 ريال) <br> بدلا من<del style="color: red;"> 350 ريال  </del> </span> <br>ويمديك تدفع اي وقت  (الآن او وقت المكافأة ) </p>

            							
            </section>
        </section></div><br><hr><br>
<div id="main">       
<section id="content" class="main">


   

    
<section class="main special">
<header class="major">
<h2>تسجيل الدخول</h2>
</header>
<form method="post" action="#">


<?php 
							if(isset($errors)){
								if(!empty($errors)){
									foreach($errors as $msg){
										echo $msg . "<br>";
									}
								}
							}
						?>
<div class="row gtr-uniform">

<div class="col-12 col-12-xsmall inputt">
    <input type="text" name="name" id="MZPassword"  placeholder="اسمك" required>
    </div>
<div class="col-12 col-12-xsmall inputt">
<input type="password" name="password" id="MZPassword" placeholder="كلمة المرور" required>
</div>

<div class="col-12">
<input type="checkbox" id="agree-human" name="agree-human" required>
<label for="agree-human">أتعهد وأقسم بالله بأني لن أقوم بتسريب أو إعادة نشر أي محتوى من محتويات الموقع .</label>
</div>
<div class="col-12">

<li style="display: block;width: 80%;margin: auto;"><input type="submit" value="تسجيل دخول" name="submit" id="login" class="button primary fit disabled log" ></li><br>
<li style="display: block;width: 88%;margin: auto;" ><a href="https://wa.me/qr/23PJHZ6DTHWRP1" target="_blank" class="button primary fit " style="display: block;width: 90%;">طلب اشتراك جديد</a></li>

</div>
</div>
</form>
</section>

</section>
</div>

<footer id="footer">
<ul class="icons copyright">
<li><a href="https://wa.me/qr/23PJHZ6DTHWRP1" class="icon brands fa-whatsapp alt"><span class="label">whatsapp</span></a></li>
<li><a href="https://instagram.com/itsmaz1n" class="icon brands fa-telegram alt"><span class="label">Instagram</span></a></li>
<li><a href="https://snapchat.com/add/itsMaz1n" class="icon brands fa-snapchat alt"><span class="label">Snapchat</span></a></li>
</ul>

<li class="copyright">&copy;  جميع الحقوق محفوظة ل<a  href="https://wa.me/qr/23PJHZ6DTHWRP1" style="text-decoration: none;"> ALZEEKA</a></li>
										
</footer>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script>


$(function() {
$('[name="agree-human"]').change(function()
      {
        if ($(this).is(':checked')) {
           $( '[name="submit"]' ).removeClass( "disabled" );
        };
        if (!$(this).is(':checked')) {
           
           $( '[name="submit"]' ).addClass( "disabled" );
        };
      });
});


</script>
</body>

<!-- Mirrored from mazn.co/introtops/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2023 20:26:27 GMT -->
</html>