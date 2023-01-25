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
<div class="accounts">
<form action="add accounts.php" method="POST">
     <div class="right">
    sunucu
    <br><select id="sv" name="sv" >
 <option value="Euw">Euw Sunucusu</option>
 <option value="TR">TR Sunucusu</option>
 </select> 
 <br>
 <br>
 
 username password <input id="username"  type="username" name="username"> 
      
      <br>
       
    </div>
  skins
  <br>
  <input id="skin"  type="text" name="skin"><br>
 
  mavi öz<br> <input id="bluesource" type="number" name="bluesource"><br>
  fiyat<br> <input   id="price" type="number" name="price"><br>
  
  

  <input class="submit" type="submit" value="Hesabı Ekle" style="width: 147.25px !important; height: 42px !important;">
  <input class="submit" type="reset" value="Temizle">
</form>
</div>

</body>
</html>

<?php
include("../config/baglanti.php"); 
if(isset( $_POST["username"],$_POST["sv"], $_POST["skin"], $_POST["bluesource"], $_POST["price"]))
{
  $username=$_POST["username"];
   $sv=$_POST["sv"];
   $skin=$_POST["skin"];
   $bluesource=$_POST["bluesource"];
   $price=$_POST["price"];

   $ekle="INSERT INTO skins (username, sv, skin, bluesource, price) VALUES ('".$username."','".$sv."','".$skin."','".$bluesource."','".$price."')";

    if($baglan->query($ekle)===TRUE) 
    {
   echo "<script>alert('Hesap Başarı ile eklendi.')</script>";
   }
}
?>
