<?php
$tempName = $_POST["user"];
$tempPassword = $_POST["password"];
$db = new SQLite3('Database.sq3'); #Creates a database
#skapa en lista av alla existerande konton med SQLITE3_ASSOC $allUsers
$allInputQuery = "SELECT * FROM Users"; #vilket kommando vill vi köra? 
$userList = $db->query($allInputQuery); #en ny array som innehåller all information

$i=0; #Jag är också ny men syns lite dåligt :( 
$exists = false; 
while ($row = $userList->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{   
 $AllPasswords[$i]= $row['Password'];
if($row['Username'] == $tempName)
{
 $exists = true;
 break;
}

 $i++;
}


#row['user'] -> row['user']=="Adam"
if($exists == true)
{
if($AllPasswords[$i] == $tempPassword)
{
	echo "hej";
}
else
{
	echo "Nej";
}

}






?>