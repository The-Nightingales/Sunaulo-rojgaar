<?php 
	include '../connection/connection.php';

	if (isset($_POST['reg_user'])){
		$ename=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password_1'];
		$cpassword=$_POST['password_2'];

		if($password==$cpassword){
			$sql1="SELECT *FROM user";
			$query1= mysqli_query($myconnection,$sql1);

			while($data=mysqli_fetch_assoc($query1)){

				if($ename==$data['username']){
					?>
							<script type="text/javascript">
							 if(window.confirm('Username already exits. Please Try Another username. ')){
							 	window.location.href='employee-registration.php';
							 }			

							</script>
				
				<?php  
				}
			}
			
		$sql = "INSERT INTO user(username,email,password_1,password_2) VALUES('$ename','$email','$password',
		'$cpassword')";
		$query = mysqli_query($myconnection,$sql);

		if($query){
				?>
					<script type="text/javascript">
					 if(window.confirm('SUCCESSFULLY REGISTERED')){
					 	window.location.href='elogin.php';
					 }			

					</script>

			<?php
			}else{
				?>
					<script type="text/javascript">
					 if(window.confirm('Failed to Register user. Please Try Again. ')){
					 	window.location.href='employee-registration.php';
					 }			

					</script>

			<?php
			}
		}
		else{
			?>
		<script type="text/javascript">
		 if(window.confirm('Please confirm your password correctly.')){
		 	window.location.href='employee-registration.php';
		 }			

		</script>

			<?php 
		}
	}
	else{
		echo "Please go to <a href='employee-registration.php'>Register Form</a>" ;
	}
 ?>