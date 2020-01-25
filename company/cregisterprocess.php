<?php 
	include '../connection/connection.php';

	if (isset($_POST['reg_user'])){
		$cname=$_POST['compname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['password_1'];
		$cpassword=$_POST['password_2'];

		if($password==$cpassword){
			$sql1="SELECT *FROM company";
			$query1= mysqli_query($myconnection,$sql1);

			while($data=mysqli_fetch_assoc($query1)){

				if($cname==$data['compname']){
					?>
							<script type="text/javascript">
							 if(window.confirm('Username already exits. Please Try Another username. ')){
							 	window.location.href='company-registration.php';
							 }			

							</script>
				
				<?php  
				}
			}
			
		$sql = "INSERT INTO company(compname,address,email,password_1,password_2) VALUES('$cname','$address','$email','$password',
		'$cpassword')";
		$query = mysqli_query($myconnection,$sql);

		if($query){
				?>
					<script type="text/javascript">
					 if(window.confirm('SUCCESSFULLY REGISTERED')){
					 	window.location.href='clogin.php';
					 }			

					</script>

			<?php
			}else{
				?>
					<script type="text/javascript">
					 if(window.confirm('Failed to Register user. Please Try Again. ')){
					 	window.location.href='company-registration.php';
					 }			

					</script>

			<?php
			}
		}
		else{
			?>
		<script type="text/javascript">
		 if(window.confirm('Please confirm your password correctly.')){
		 	window.location.href='company-registration.php';
		 }			

		</script>

			<?php 
		}
	}
	else{
		echo "Please go to <a href='company-registration.php'>Register Form</a>" ;
	}
 ?>