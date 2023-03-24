<?php

// $con = mysqli_connect("localhost","id20383092_auth1","4)AK1L5?Gl+>[18u","id20383092_auth");
// if(!$con)
// {
// echo "not connected to db recheck the details";
// }
// else
// echo "Connected to database successfully";




$dbHost="sql113.eb2a.com";
$dbUser="eb2a_33745454";
$dbPass="772671264Zizo";
$dbName="eb2a_33745454_auth";



try{
    $conn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
   //echo "success";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}




