<?php
session_start();
/*if(isset($_SESSION['user'])){
    header('location:profile.php');
    exit();
}*/
if(isset($_POST['submit'])){
 include 'conn-db.php';
   $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);
   $phone=filter_var($_POST['phone'],FILTER_SANITIZE_STRING);

   $errors=[];
   

   // validate email
   if(empty($phone)){
    $errors[]="يجب كتابة البريد الاكترونى";
   }


   // validate password
   if(empty($password)){
        $errors[]="يجب كتابة  كلمة المرور ";
   }



   // insert or errros 
   if(empty($errors)){
   
      // echo "check db";

    $stm="SELECT * FROM usres WHERE phone ='$phone'";
    $q=$conn->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
       $errors[] = "خطأ فى تسجيل الدخول";
    }else{
        
		$stm="SELECT * FROM usres WHERE password ='$password'";
		$q=$conn->prepare($stm);
		$q->execute();
		$data=$q->fetch(); 
         
        if(!$data){
			$errors[] = "خطأ فى تسجيل الدخول";
         }else{
            $_SESSION['user']=[
                "name"=>$data['name'],
                "phone"=>$phone,
              ];
            header('location:alameri_web/index.html');

         }
    }
     
    
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>منصة العامري</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title p-b-49">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn" ></div>
							
								<h1 style="padding:10px ; color:white">منصة العامري للخدمات التعليمية</h1>
							
						</div>
                    </div>
                       
					</span>
							<?php 
							if(isset($errors)){
								if(!empty($errors)){
									foreach($errors as $msg){
										echo $msg . "<br>";
									}
								}
							}
						?>
										
                    <div class="wrap-input100 validate-input" data-validate="نسيت كتابة رقم الهاتف">
					<center><span class="label-input100" style="font-size:20px">رقم الهاتف </span></center>
						
						<input class="input100" type="tel"  value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>" name="phone"  placeholder="ادخل رقم الهاتف">
						<span class="focus-input100" data-symbol="&#xf150;"></span>
					</div>
					<br>

					<div class="wrap-input100 validate-input password-field" data-validate="نسيت كتابة كلمة المرور">
					<center><span class="label-input100" style="font-size:20px">كلمة المرور</span></center>
						
						<input class="input100" id="fakePassword" type="password" name="password" placeholder="قم بإنشاء كلمة مرور">
							<!--<span class="focus-input100" data-symbol="&#xf190;"></span>-->
                        <span id="toggler" class="far fa-eye" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="https://wa.me/qr/6YQT2SXQYVV6O1">
							نسيت كلمة المرور؟
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn"  type="submit" name="submit" >
								<h3>تسجيل الدخول</h3>
							</button>
						</div>
                    </div>
                    <br>
                    <h3 style="text-align: center;">أو</h3><br>

                    <div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
                            <a href="index.php" class="txt2">
							<h3 style=" text-decoration: none;color: white;font-size: 30px;text-align: center;padding: 8px;"> تسجيل جديد</h3>
						</a>
							
						</div>

					
                   
					

					<div class="flex-col-c p-t-155">
                    
                       
						
					</div>
				</form>
			</div>
		</div>
    </div>
   


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script>
    var password = document.getElementById('fakePassword');
    var toggler = document.getElementById('toggler');
    showHidePassword = () => {
    if (password.type == 'password') {
    password.setAttribute('type', 'text');
    toggler.classList.add('fa-eye-slash');
    } else {
    toggler.classList.remove('fa-eye-slash');
    password.setAttribute('type', 'password');
    }
    };
    toggler.addEventListener('click', showHidePassword);</script>


</body>
</html>


<!--



<form action="index.php" method="POST" style="text-decoration: none;border-radius: 20px;background: rgb(61, 19, 8);color: white;width: 700px;text-align: center;padding: 5px;margin:200px auto;padding:20px">

/*




*/



   <input  style="border-radius: 20px;background: black;color: white;width: 300px;text-align: center;padding: 10px;"  type="submit" name="submit" value="Register"><br><br>
   
    <a style="text-decoration: none;border-radius: 20px;background: black;color: white;width: 280px;text-align: center;padding: 10px;display: block;margin:auto" href="login.php">login</a>
</form>
-->