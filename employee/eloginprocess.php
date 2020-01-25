<?php 
	include '../connection/connection.php';
	//session_start();

if(isset($_POST['reg_user'])){

	$euser = $_POST['username'];
	$pass = $_POST['password_1'];

	$query = mysqli_query($myconnection,"SELECT * FROM user");

	if($query){

			while($data=mysqli_fetch_assoc($query)){

				if($euser==$data['username'] && $pass == $data['password_1']){
					
					// $_SESSION['fullname']=$data['fullname'];
					// $_SESSION['username']=$data['username'];
                       ?>
                       <a href="../home/apply.php"></a>
                       <?php


				 	//header('location:../home/apply.php'); -->
				}else{
					?>
							<script type="text/javascript">
							 if(window.confirm('Password incorrect. Please Try Again. ')){
							 	window.location.href='elogin.php';
							 }			

							</script>
				
				<?php  
				}
			}
	}else{
	echo 'Query Not Executed';
}

}	
else{
	echo "Please try again";
}
	

		
	
 ?>