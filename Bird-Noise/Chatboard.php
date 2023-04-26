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
	$allInputQuery = "SELECT * FROM Posts";
	$postList = $db->query($allInputQuery);
	?>
		
	<form action ="InsertToDB.php" method="GET">
	Make a Post
	<br>
	<input type="text" name="Post">
	<input type="submit">

	<?php
	while ($row = $postList->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
	{   
		echo "<br>";
		echo $row['Chatboard'];
	}
}
else
{
	header("Location:Index.php");
}

}






?>