<?php

$vt_sunucu="localhost";
$vt_kullanici="unranke_skins";
$vt_sifre="157982bt";
$vt_adi="unranke_skins";


$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
	die("veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}
?>



