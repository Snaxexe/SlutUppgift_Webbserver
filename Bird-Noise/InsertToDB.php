<?php
$tempName = $_POST["user"]; #Det som står i hakparentesen är samma som name=”” från DB02.php!!
$tempPassword = $_POST["password"];
$tempPost = $_GET["Post"]; #Mycket Post men det behövs
$db = new SQLite3('Database.sq3'); #vilken databas öppnar vi? 
$db->exec("INSERT INTO Users(Username, Password) VALUES('".$tempName."','".$tempPassword."')"); #exec kör enskilda kommandon, just INSERT INTO är snällt och går bra. 
$db->exec("INSERT INTO Posts(Chatboard) VALUES('".$tempPost."')");
header("Location: index.php");
?>
