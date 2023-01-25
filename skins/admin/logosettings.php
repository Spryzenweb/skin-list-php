<?php
@session_start();
@ob_start();
define("DATA","../data/");
define("ADMİN","admin views/")
?>

<?php 
include("../config/baglanti.php");

if ($_SESSION["giris"] != sha1(md5("var"))  || $_COOKIE["kullanici"] != "msb") {
  header("Location: logout.php"); }
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
      <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="shortcut icon" href="../img/fav.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/menu.css">

</head>
<body>
      <?php
include_once(ADMİN."header.php");
include_once(DATA."footer.php");
include_once(ADMİN."ulmenu.php");
      ?>

<div class="boxmodel2">
<div class="logoset">
<a>Favicon Değiştir</a>
</div>
<br>

<form action="upload2.php" method="post" enctype="multipart/form-data">
 <input type="file" name="fileToUpload" id="fileToUpload">
<br><br>
  <input type="submit" class="button" value="Resmi yükle" name="submit">
</form>
</div>
      
  <div class="boxmodel">
<div class="logoset">
<a>Logo Değiştir</a>
</div>
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="fileToUpload" id="fileToUpload">
<br><br>
  <input type="submit" class="button" value="Resmi yükle" name="submit">
</form>
</div>

     

   

  </body>
