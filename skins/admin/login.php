<?php
@session_start();
@ob_start();
define("DATA","../data/");
define("SAYFA","../views/")
?>



<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Admin Panel Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/Admin_login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="shortcut icon" href="../img/fav.png">
</head>
<div class="backkey">
<header>
   
   <a class="backkey" href="../index.php">Geri Dön</a> - 

    </div>
  </header>
<div class="login-page">
<body class="body">
	
	
<div class="login-page">
  <div class="form">

    <form action="" method="POST">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input name="kullanici" type="text" placeholder="&#xf007;  username" required />
      <input name="sifre" type="password" id="password" placeholder="&#xf023;  password" required />
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <br>
      <button>LOGIN</button>
      <p class="message"></p>
    </form>

    <form class="login-form">
      
    </form>
  </div>
</div>


  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>



<?php

    include("function.php");
    
    include("../config/baglanti.php");

    if ($_POST) {
        $kullanici =guvenlik ($_POST["kullanici"]);
        $sifre =guvenlik ($_POST["sifre"]);
        
        

         
        $sorgu = $baglan->query("select * from kullanici where (kullanici='$kullanici' and sifre='$sifre')");
         
        $kayitsay = $sorgu->num_rows;
        
       


        if ($kayitsay > 0) {
            setcookie("kullanici","msb",time()+60*60);
            $_SESSION["giris"] = sha1(md5("var"));
            

            echo "<script> window.location.href='index.php'; </script>";
        } else {
            echo "<script>
            alert('HATALI KULLANICI BİLGİSİ!'); window.location.href='index.php';
            </script>";
        }
    }
?>

<?php
include_once(DATA."footer.php");
 ?>