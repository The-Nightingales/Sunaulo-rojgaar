


<?php
if (isset($_POST['submit'])){
	

	$jobtitle = $_POST['jobtitle'];
	$jobdescription = $_POST['jobdescription'];
	$jobspecification = $_POST['jobspecification'];
	$noofvacancy = $_POST['noofvacancy'];
	$joblocation = $_POST['joblocation'];
	$companyname = $_POST['companyname'];

	include "../connection/connection.php";
	

	$sql = "INSERT INTO `jobposting`(`jobtitle`, `jobdescription`, `jobspecification`, `noofvacancy`, `joblocation`, `companyname`) VALUES ('".$jobtitle."','".$jobdescription."','".$jobspecification."','".$noofvacancy."','".$joblocation."', '".$companyname."')";
	 if (mysqli_query($myconnection, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "" . mysqli_error($myconnection);
	}

	unset($_POST['submit']);
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Sunaulo Rojgar</title>
        
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/29eb94ca83.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../home/styles.css"> 
        <link rel="stylesheet" href="../assets/bootstrap.css">
    </head>
    <body id="top">
        <header>
           
            <nav>
                <ul>
                    <li><a href="#top">Admin Portal</a></li>
                   	
                </ul>
            </nav>
        </header>

        <div class="container">
  		<form style="margin-top:95px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <legend>Post the job</legend>

	<div class="form-group">
      <label for="jobtitle">Company Name</label>
      <input type="text" name="companyname" class="form-control" id="companyname" placeholder="Company Name">
    </div>
    <div class="form-group">
      <label for="jobtitle">Job Title</label>
      <input type="text" name="jobtitle" class="form-control" id="jobtitle" placeholder="Job Title">
    </div>
    <div class="form-group">
      <label for="job-description">Job Description</label>
      <textarea class="form-control" name="jobdescription" id="jobdescription" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="jobspecification">Other Specification</label>
      <textarea class="form-control" name="jobspecification" id="jobspecification" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="noofvacancy">No. of vacancy</label>
      <input type="number" class="form-control" name="noofvacancy" id="noofvacancy" placeholder="No. of vacancy">
    </div>
    <div class="form-group">
      <label for="joblocation">Job Location</label>
      <input type="text" class="form-control" name="joblocation" id="joblocation" placeholder="Job Location">
    </div>


    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  </fieldset>
</form>


</div>
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    
</body>
</html>