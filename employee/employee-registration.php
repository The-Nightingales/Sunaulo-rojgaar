<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="employee.css">
</head>
<body>
  <div class="header">
  	<h2>Employee Register</h2>
  </div>

  <form method="post" action="eregisterprocess.php">
  	
  	<div class="input-group">
	  <label>Username</label>
	  <input type="text" name="username" >
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
		Already a member? <a href="elogin.php">Sign in</a>
	</p>
	  </form>
</body>
</html>