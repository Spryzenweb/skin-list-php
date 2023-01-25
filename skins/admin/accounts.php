<?php
define("DATA","../data/");
define("ADMİN","admin views/")
?>

<?php 
include("../config/pay.php");
?>

<?php 
$bul = "SELECT * FROM skins";
$kayıt  = $baglan->query($bul);
$kayıt->execute();
?>

<?php
if(isset($_GET['sil'])){
    $bul="DELETE FROM skins WHERE `skins`.`id` = ?"; 
    $kayıt=$baglan->prepare($bul);
    $kayıt->execute([
        $_GET['sil']
    ]);
 
    header('Location:accounts.php');
 
}
 
?>
 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
     <link rel="stylesheet" type="text/css" href="../css/menu.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Skin list</title>
</head>
<body>

<?php 
   include_once(ADMİN."header.php");

   ?>
   <a class="buttonx" href="accounts.php">Hesaplarım</a>
    <a class="buttonx" href="add accounts.php">Hesap Ekle</a>
    
        <a class="buttonx" href="multiacc.php">Toplu Hesap Ekle</a>
  <a class="buttonx" href="logosettings.php">Logo Ayarları</a>

</head>
<body>


<h2>lolunranked.net unranked skin list</h2>
<div class="data">
<div id="scrolltable"> 
 <main>

        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <table id="myTable" class="table table-hover table-dark table-striped">
                        <thead>

        <tr>
           

</div>


<label  class="text-white">Şampiyon/Kostüm ARA</label>
    
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Şampiyon/Kostüm ARA
"  aria-describedby="basic-addon2"> 






            <td>Hesap ID</td>
            <td>Hesap Bilgileri</td>

            <td>Hesabın Sunucusu</td>
            <td><img src="../img/hextech_icon.png" class="rounded-circle" width="60px" height="60 px" style="object-fit: cover;"> </td>
            <td> Mavi Öz </td>
            <td>Hesabın Fiyatı</td> 
            <td>Sil</td>
            
        </tr> 
      
<?php
 while($satir = $kayıt->fetch(PDO::FETCH_ASSOC)) { 
?>
 

<tr>
 
           

                                <td><?=$satir['id']?></td>
                                <td><?=$satir['username']?></td>
                              <div id="sv">   <td>  <?php if ($satir['sv']=='TR') {
                                    echo '<img src="../img/TR.png" class="rounded-circle" width="60px" height="60 px" style="object-fit: cover;">';
    
} else {
    echo '<img src="../img/EUW.png" class="rounded-circle" width="60px" height="60 px" style="object-fit: cover;"> ';
} ?><br><?=$satir['sv']?>  </td> </div>


                                <td>Kostümler <br><?=$satir['skin'] ?> <br> <span class="text-success">                ✔ Level 30              ✔ Unranked                  ✔ Email/Şifre Değiştirilebilir                         </span></td>
                                <td><img src="../img/blue_essence.png" class="rounded-circle" width="60px" height="60 px" style="object-fit: cover;"> <br> <?=$satir['bluesource']?></td>
                                <td>Hesabın Fiyatı <br><?=$satir['price']?>₺</td>
                                  <td> <div class="btn-group">
                                        
                                        <a href="?sil=<?=$satir['id']?>" class="button">sil</a>
                                    </div> </td>
                            


<?php } ?>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>




</div>




    


   



</body>


</html>