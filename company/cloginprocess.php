<?php 
	include '../connection/connection.php';
	//session_start();

if(isset($_POST['reg_user'])){

	$cuser = $_POST['compname'];
	$pass = $_POST['password_1'];

	$query = mysqli_query($myconnection,"SELECT * FROM company");

	if($query){

			while($data=mysqli_fetch_assoc($query)){

				if($cuser==$data['compname'] && $pass == $data['password_1']){
					
					// $_SESSION['fullname']=$data['fullname'];
					// $_SESSION['username']=$data['username'];

					header('location:cindex.php');
				}else{
					?>
							<script type="text/javascript">
							 if(window.confirm('Password incorrect. Please Try Again. ')){
							 	window.location.href='clogin.php';
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