<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body style="background-color:#CBE896;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">

<div style="background-color:#FFFFFC; width:50%; text-align:left; padding:50px; margin:0 auto;">
		<div style="background-color:#AB87A8; width:85%; text-align:left; padding:50px; color:white;">
		<center><h2 style="font-family:'Times New Roman'; color:black; ">Registration Page</h2></center>
		</div>
		<br>
		<form action="reg.php" name="form" id="userfrm" method="post">
		<fieldset>
		<legend style="background-color:#36BABF">Enter the following</legend>
		
			<label style="margin-left:10px;"><b>User ID:</b></label>
			<input name="ID" type="text" minlength="5" maxlength="12" required/><br><br>
		
			<label style="margin-left:10px;"><b>Password:</b></label> ​
			<input name="password" type="password" minlength="8" maxlength="12"/> <br><br>
			
			<label style="margin-left:10px;"><b>Confirm Password:</b></label> ​
			<input name="cpassword" type="password" minlength="8" maxlength="12"/> <br><br>
		
		</fieldset>
		<center><br>
			<a href="signin.php"><input style="border: none;background-color: #E25068; color: white; padding: 15px 32px; text-align: center;display: inline-block; font-size: 16px;" type="button" onclick="validpw(document.form)" value="Submit Form"/></a><br><br>
			<input  style="border: none;background-color: #5F5C99; color: white; padding: 15px 32px; text-align: center;display: inline-block; font-size: 16px;" type="reset" value="Reset"/><br>
		</center>
		</form>
		</div>
</body>
</html>

<script>
function validpw()
{
	password1 = form.password.value; 
    password2 = form.cpassword.value; 
  
    if (password == '') 
        alert ("Please enter Password"); 
    else if (cpassword == '') 
        alert ("Please enter confirm password");           
    else if (password1 != password2) 
	{ 
        alert ("\nPasswords do not match: Please try again...") 
        return false; 
    }
	else
	{ 
		alert("User Registered!") 
        return true;
	}
}
</script>