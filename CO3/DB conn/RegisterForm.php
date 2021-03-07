<!DOCTYPE HTML>
<html>
<head>
<title>RegisterForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<script>
function validate()
{ 
var fullname = document.register.fullname.value;
var email = document.register.email.value;
var username = document.register.username.value; 
var password = document.register.password.value;
var conpassword= document.register.conpassword.value;
if (fullname==null || fullname=="")
{ 
alert("Full Name can't be blank"); 
return false; 
}
else if (email==null || email=="")
{ 
alert("Email can't be blank"); 
return false; 
}
else if (username==null || username=="")
{ 
alert("Username can't be blank"); 
return false; 
}
else if(password==null || password=="")
{
    alert("Password can't be blank");
    return false;
}
else if(password.value.length > 6)
{ 
alert("Password must be at least 6 characters long.",password); 
return false; 
} 
else if(conpassword==null || conpassword=="")
{
    alert("Confirm Password can't be blank");
    return false;
}
else if (strval(password)!=strval(conpassword))
{ 
alert("Confirm Password should match with the Password"); 
return false; 
} 
else
{
    alert(password);
}
} 
</script> 
</head>
<body>
 
<!-- Make a note that the method type used is post, action page is register.php and validate() function will get called on submit -->
 <div style="text-align:center"><h1>PHP Registration application using MySQL</h1></div>
 <br>
<form name="register" method="post" action="Register.php" onsubmit="return validate();" >
 <!-- Not advised to use table within the form to enter user details -->
<table align="center" >
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname" /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" /></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" name="conpassword" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register"></input><input
type="reset" value="Reset"></input></td>
</tr>
</table>
</form>
</body>
</html>
