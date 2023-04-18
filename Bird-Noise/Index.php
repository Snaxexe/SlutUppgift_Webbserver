<?php
$db = new SQLite3('Database.sq3'); #Creates a database
$db->exec("CREATE TABLE IF NOT EXISTS Users (Username text, Password text, User_ID integer primary key Autoincrement, Following int );"); #Creates a Table for users
$db->exec("CREATE TABLE IF NOT EXISTS Posts (Chatboard text, Replies text, Flagged bool, Post_Id integer Autouncrement, Author int, foreign key (Author) references Users(User_ID))"); #Creates a Table for Posts

?>

<!--Used for login-->
<form action ="Chatboard.php" method="POST">
Username: <input type="text" name="user">
<br>
Password: <input type="password" name="password">

<input type="submit" value="Login">
</form>



<!--Button to take you to register page-->
<form action ="RegisterUser.php" method="POST">

<input type="submit" value="Register">
</form>


<?php

?>