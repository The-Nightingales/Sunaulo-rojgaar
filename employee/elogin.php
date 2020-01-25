<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="elogin.css">
</head>
<body>
  <div class="header">
    <h2>Employee Login</h2>
  </div>

  <form method="post" action="eloginprocess.php">
    
    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username" >
  </div>  

  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div>

  <div class="input-group">
    
    <button type="submit" class="btn" name="reg_user">Login</button>
  </div>

  <p>
    New User?<br>
    <a href="employee-registration.php">Register here</a>
  </p>
    </form>
</body>
</html>