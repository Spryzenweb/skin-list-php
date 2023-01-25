<?php
$servername = "localhost";
$dbusername = "unranke_skins";
$dbpassword = "157982bt";
$dbname = "unranke_skins";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$file = fopen("../img/export.txt", "r") or die("Unable to open file!");

while (!feof($file)) {
    $line = fgets($file);
    $data = explode(';', $line);
    $username = $data[0];
    $sv = $data[1];
    $skin = $data[2];
    $bluesource = $data[3];
    $price = $data[4];

    $sql = "INSERT INTO skins (username, sv, skin, bluesource, price)
    VALUES ('$username', '$sv', '$skin', '$bluesource', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

fclose($file);

$conn->close();
header("Refresh: 3; url=https://skins.lolunranked.net/admin/accounts.php");
?>
