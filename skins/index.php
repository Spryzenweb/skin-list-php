<?php
define("DATA","data/");
?>

<?php 
include("config/pay.php");
?>

<?php 
$bul = "SELECT * FROM skins";
$kayıt  = $baglan->query($bul);
$kayıt->execute();
?>

 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <link rel="stylesheet" type="text/css" href="/css/menu.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Skin list</title>
</head>
<body>

<?php 
   include_once(DATA."header.php");
   include_once(DATA."home.php");
  
   ?>

	


   



</body>
</html>