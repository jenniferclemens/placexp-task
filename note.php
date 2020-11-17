<?php
	session_start();
	$username=$_SESSION['UserId'];
?>

<!DOCTYPE html>
<html>
<head>
<title>NOTES</title>
</head>
<body style="background-color:#CBE896;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">

<div style="background-color:#FFFFFC; width:50%; text-align:left; padding:50px; margin:0 auto;">
		<div style="background-color:#AB87A8; width:85%; text-align:left; padding:50px; color:white;">
		<center><h2 style="font-family:'Times New Roman'; color:black; ">New Note</h2></center>
		<br><br><br>
		</div>
		<br>
		<form action="note.php" name="form" id="userfrm" method="post">
		<fieldset>
		<legend style="background-color:#36BABF">Create your new note</legend>
		
			<label style="margin-left:10px;"><b>Title:</b></label>
			<input name="title" type="text" value="Unknown" /><br><br>
		
			<label style="margin-left:10px;"><b>Notes:</b></label>
			<textarea name="note" rows="4" cols="40" form="userfrm"></textarea><br><br>
		
		</fieldset>
		<center><br>
			<a href="notes.php"><input style="border: none;background-color: #E25068; color: white; padding: 15px 32px; text-align: center;display: inline-block; font-size: 16px;" type="button" name="submit-btn" value="Create"/></a><br><br>
			<input  style="border: none;background-color: #5F5C99; color: white; padding: 15px 32px; text-align: center;display: inline-block; font-size: 16px;" type="reset" value="Reset"/><br>
		</center>
		</form>
		</div>
	<br><br>
</body>
</html>