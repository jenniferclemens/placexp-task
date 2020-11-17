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
		<center><h2 style="font-family:'Times New Roman'; color:black; ">Your Notes</h2></center>
		<br><br><br>
		<div>
		<?php
			require 'dbconfig/config.php';
			$username=$_SESSION['username'];
			$query="select * from notes where username='$username'";
			$query_run=mysqli_query($con,$query);
			if (mysqli_num_rows($query_run)>0) 
			{
				print '<table width="100%" border="2px solid black"> ';
				print "<tr><th>Date</th><th>Title</th><th>Content Preview</th></tr> ";
				while($row = $query_run->fetch_assoc()) 
				{
					echo '<tr><td>'.$row["date"].'</td><td>'.$row["title"].'</td><td>'.$row["content"].'</td><td>'.$row["bmivalue"].'</td></tr>';
				}
				print "</table>";
			} 
			else 
			{
				echo "(No history.)";
			}
		?>
	</div>
	<br><br>
	<a href="add.php"><input  style="border: none;background-color: #5F5C99; color: white; padding: 15px 32px; text-align: center;display: inline-block; font-size: 16px;" type="button" value="New Note"/></a><br>
</body>
</html>