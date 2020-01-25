<?php
    include "../connection/connection.php";
    $sql = 'SELECT * FROM `jobposting` WHERE 1';
    $result = $myconnection->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                                $a = array('companyname' => $row['companyname'], 
                                'jobtitle' => $row['jobtitle'], 
                                'id' => $row['id']);

                                array_push($data, $a);
        }
    } else {
        echo "0 results";
    }

    //var_dump($data);
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    </head>
    <body id="top">
        <header>
           
            <nav>
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#contact">Contact</a></li>
                   
                </ul>
            </nav>
        </header>
  
        <div id="hero">
            <div class="background-image"></div>
            <h1>SUNAULO ROJGAR</h1>
            <h3>FIND JOB OF YOUR CHOICE</h3>

            <form class="example" action="action_page.php">
                <input type="text" placeholder="Search jobs" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </br>
        </br>
        
             <button><a href="../company/clogin.php" class="btn">Company Login</a></button>
             <br>
             <br>
             <br>
             
               <button><a href="../employee/elogin.php" class="btn"> Employee Login</a></button>

    </div>

     <div id="about">
         <h3 class="title">About us</h3>
        <div id="Two-col">
            <div class="about-img"><img src="images/about.jpg" alt="thumbs up"></div>
            <div class="about-bio">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, suscipit harum assumenda 
                    praesentium debitis repellat dolorem quasi eaque doloremque iste provident beatae asperiores dicta, 
                    tempore qui minima exercitationem et nam.</p>
            </div>
            <p>&nbsp;</p>
        </div>
        <hr>
    </div>

            <div id="job" style="text-align: center;">
                <h3 class="title">JOBS</h3>
               <!--  <h2>Company One:</h2>
                 <a href= "jobdesc.php ">Job</a>  -->
                 <?php
                 for($i=0; $i<count($data); $i++){
                       
                        echo '<h2>'. $data[$i]['companyname'].'</h2>';
                        echo '<p><a href="apply.php?id='.$data[$i]['id'].'">'.$data[$i]['jobtitle'].'</a></p>';
                 }
                 ?>
                 
                
             <!--    
                <h2>Company Two:</h2>
                <a href="jobdesc.php">(Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque.)</a>
                
                <h2>Company Three:</h2>
                <p class="quote">(Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque.)</p>
                -->
                
            </div>

           
            <div id="register">
                <button><a href="../company/company-registration.php" class="btn" >Company registeration</a></button>
            </div>

            <div id="register">
                <button><a href="../employee/employee-registration.php" class="btn" >User registeration</a></button>
            </div>
            
            <br>
            <br>
    
            <div id="contact">
                <h3 class="title">Location</h3>
                <section class="flexbox-section">
                    <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d182.85421448046418!2d85.31090870733003!3d27
                            .69005942523002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4ad7096dd%3A0x29fa3d73b99dcc97!2sKupo
                            ndole%2C%20Lalitpur%2044600!5e1!3m2!1sen!2snp!4v1575396060067!5m2!1sen!2snp" width="100%" height="200" frameborder="0" 
                            style="border:0;" allowfullscreen=""></iframe>
                    </p>
                    <p>
                            Kupondole
                            कुपोन्डोल
                            Lalitpur 44600
                    </p>
                </section>
            </div>

           
        <footer id="social-media">
            <ul>
                <li><a href="#" target="blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <p>&copy; <script>document.write(new Date().getFullYear());</script> Alright reserve to sunaulo rojgar.</p>
        </footer>
        <script type="text/javascript">
            $(document).ready(function() {
              $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
        
                var target = this.hash;
                var $target = $(target);
        
                $('html, body').stop().animate({
                  'scrollTop': $target.offset().top - 100
                }, 900, 'swing', function() {
                  window.location.hash = target - 100;
                });
              });
            });
          </script>
    
</body>
</html>