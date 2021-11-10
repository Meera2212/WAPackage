<html>
<head>

<title>Login</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   </head>

<body>
   <div class="loginbox">
   <img  src="log.png" class="log">
   <h1>Login</h1>
   <p>Username</p>
   
   
   <?php
error_reporting(E_ERROR);
session_start();

$_SESSION['regName'] = $regValue;

?>

<form method="get" action="about.php">
    <input type="text" name="regName" value="">
 


   <p>Password</p>
   <input type="Password" name="password" placeholder="Enter password">
   <input type="submit">
   <a href="signup.html">Don't have an account?</a>
   <a href="about.php">Continue without signing in</a>
   
   </form>
   </div>
   	  <script>
	  function validate()
	  {
	  var x=document.forms["signup"]["name"].value;
	  var y=document.forms["signup"]["password"].value;
	  if(x=="")
	  {
	  alert("Enter the username");
	  }
	  if(y=="")
	  {
	  alert("enter the password");
	  }
	  }
	  <script>
</body>

</html>