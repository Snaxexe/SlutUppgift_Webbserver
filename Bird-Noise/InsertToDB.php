<?php

$secret = $_POST["secret"];

$db = new SQLite3('Database.sq3'); #vilken databas öppnar vi? 
if($secret=="1")
{
$tempName = $_POST["user"]; #Det som står i hakparentesen är samma som name=”” från DB02.php!!
$tempPassword = $_POST["password"];

$db->exec("INSERT INTO Users(Username, Password) VALUES('".$tempName."','".$tempPassword."')"); #exec kör enskilda kommandon, just INSERT INTO är snällt och går bra. 
header("Location: Index.php");

}
else
{
$tempPost = $_GET["Post"]; #Mycket Post men det behövs

$db->exec("INSERT INTO Posts(Chatboard) VALUES('".$tempPost."')");
header("Location: Chatboard.php");
}
?>
