<?php
if(isset($_GET['id'])){
    include "../connection/connection.php";

    $sql = 'SELECT * FROM `jobposting` WHERE id='.$_GET['id'];
    $result = $myconnection->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                                $a = array('companyname' => $row['companyname'], 
                                'jobtitle' => $row['jobtitle'],
                                'jobdescription' => $row['jobdescription'],
                                'jobspecification' => $row['jobspecification'],
                                'noofvacancy' => $row['noofvacancy']
                                );

                                array_push($data, $a);
        }
    } else {
        echo "0 results";
    }

    // var_dump($data);

}
?>
<?php 
if(isset($_GET['id'])){ 

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Sunaulo Rojgar</title>
        
        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/29eb94ca83.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles.css"> 
        <link rel="stylesheet" href="../assets/bootstrap.css">
    </head>
    <body id="top">
        <header>
           
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About us</a></li>
                    <li><a href="index.php">Contact</a></li>
                   
                </ul>
            </nav>
        </header>
<div class="container">

        <h1 style="margin-top: 96px;">Job Description</h1>
        <table class="table table-hover">
    <tr>
      <th scope="col">Company Name</th>
      <td scope="col"><?php echo $data[0]['companyname']; ?></td>
    </tr>
    <tr>
      <th scope="col">Job Title</th>
      <td scope="col"><?php echo $data[0]['jobtitle']; ?></td>
    </tr>
    <tr>
      <th scope="col">Job Description</th>
      <td scope="col"><?php echo $data[0]['jobdescription']; ?></td>
    </tr>
        <tr>
      <th scope="col">Job Specification</th>
      <td scope="col"><?php echo $data[0]['jobspecification']; ?></td>
    </tr>
    <tr>
      <th scope="col">No of Vacancies</th>
      <td scope="col"><?php echo $data[0]['noofvacancy']; ?></td>
    </tr>
</table>
<button type="submit" class="btn btn-primary">Apply</button>
</div>
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/popper.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>