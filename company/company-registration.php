<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
  <div class="header">
  	<h2>Company Registration</h2>
  </div>

  <form method="post" action="cregisterprocess.php">
  	
  	<div class="input-group">
	  <label>Company Name</label>
	  <input type="text" name="compname" >
	</div>	

	<div class="input-group">
	  <label>Address</label>
	  <input type="text" name="address" >
	</div>	
		  
	<div class="input-group">
		<label>Email</label> 
		<input type="email" name="email" >
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>


	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>

	<div class="input-group">
		<button type="submit" class="btn" name="reg_user">Register</button>
	</div>

	<p>
		Already a member? <a href="clogin.php">Sign in</a>
	</p>
	  </form>
</body>
</html>