<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="width=device-width" />
	<title>Digit Electronics</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	
</head>
<body>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
    <div class="container-fluid" style="background-color: grey;color: white;">
		<div class="container"><br>
        <p class="pull-right"> E-mail : cs@digitelec.com</p><br>
        </div>
        </div>
		<div class="container">
       <h1><font face ="Corbel">Digit Electronics</font></h1>
       </div>
		
       <div class="container">
        <div class="container" style="background: red; color: white;"> <!--contener start -->
								<div class="row">  <!-- row start -->

								<div class="col-sm-12 mymanu">
								<nav class="navbar ">
								<div class="navbar-header">
								
								</div>
								<div id="mystyle">
								    <ul class="nav navbar-nav">
                    <li><a href="home.php"><font color="white">Home</a></font></li>
								<li><a class="active" href="index.php"><font color="white">Products</font></a></li>
								<li><a href="aboutus.php"><font color="white">About Us</font></a></li>
								<li><a href="contact.php"><font color="white">Contact Us</font></a></li>
								<li><a href="reviews.php"><font color="white">Reviews</a></font></li>
								<li><a href="deals.php"><font color="white">Deals of the week</a></font></li>
								</ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
        </div>
		<br><br>
		<div class="container">
                          
					<section class="contact-us flex">
                    <div class="contact-info-wrapper">
                    <h1 class="heading" ><font face ="Corbel"> <span>Contact Us</span></font> </h1>

                        <div class="contact-info">
                            <div>
                                <div>
                                   
                                    <div>
                                        <span>Call us:</span>
                                        <span>+91 999999899</span>
                                    </div>
                                </div>
                                <div>
                                   
                                    <div>
                                        <span>E-mail:</span>
                                        <span>cs@digitelec.com</span>
                                    </div>
                                </div>
                                <div>
                                  
                                    <div>
                                        <span>Shop Working Hours:</span>
                                        <span>Mon - Sat 8.00am - 12.00am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<br>
                    <div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.210365474136!2d80.50561911468967!3d16.464882388637555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35f253b87d44b3%3A0x591c2967f32abc19!2sSRM%20University%20AP%20Amravati!5e0!3m2!1sen!2sru!4v1618853222798!5m2!1sen!2sru" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </section>
					
					
				</div>
                </div> 
<br><br>
     <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Query / Contact Form</h1>
          </div>
          <div class="panel-body">
            <form method="post">
              <div class="form-group">
                <label for="firstName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="Enter your name"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your mail"
                />
              </div>
             
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  placeholder="Enter your number"
                  name="number"
                />
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control py-3" id="message" name="message" type="text" placeholder="Enter your message..." rows="6"></textarea></div>
                               
              <input type="submit" name ="sub" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Digit</small>
          </div>
        </div>
      </div>
    </div>
              <?php
              if(isset($_POST['sub']))
              {
            $firstName = $_POST['firstName'];
              $email = $_POST['email'];
            $number = $_POST['number'];
              $message = $_POST['message'];

            if(mysqli_query($link,"insert into contact(firstName, email, number, message)  values('$firstName','$email','$number','$message')"))
                            {
                                  echo "<script>alert('Query submitted successfully')</script>";
                            }
                            else
                            {
                              echo "<script>alert('Data Not Save')</script>";
                            }
              }
            
              ?>
				<br>
				<div class="container" style="background-color: red;color: white">
			<h2 align="center">© Copyright 2021 DigitElectronics</h2>
		</div>
			
	</div>
	
</body>
</html>