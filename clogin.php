<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="clogin.css">
</head>
<body>
  <div class="header">
    <h2>Company Login</h2>
  </div>

  <form method="post" action="cloginprocess.php">
    
    <div class="input-group">
    <label>Company Name</label>
    <input type="text" name="compname" >
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
    <a href="company-registration.php">Register here</a>
  </p>
    </form>
</body>
</html>