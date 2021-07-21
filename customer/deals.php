<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
 
	<title>Digit Electronics</title>
	
    <link rel="stylesheet" href="css/deal.css">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

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

                              



              <div class="box-container">
              <section class="arrival" id="arrival">
              <center><h1 class="heading" ><font face ="Corbel"> <span>Discounts of the week</span></font> </h1></center>
             <div class="box-container">

        <?php
                            $q="select * from product limit 0,4";
                            $run=mysqli_query($link,$q);
                            while($row=mysqli_fetch_array($run))
                            {
                          
                            	$id=$row['id'];
                            	$name=$row['name'];
                            	$img=$row['img'];
                            	$brand=$row['brand'];
                                $price=$row['price'];
                         ?>
       <div class="box">
        <div class="image">
         <?php echo "<img src='admin/c/$img'>"; ?>
        </div>
        <div class="info">
        <h4 align="center">  <?php echo $brand; ?> <?php echo $name; ?></h4>
            <div class="subInfo">
                <strong class="price"> ₹ <?php echo $price; ?>.00 <span>₹1<?php echo $price; ?>/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
        <a href="b.php?id=<?php echo $id; ?>" style="--i:2;" class="fas fa-shopping-cart"></a>
        </div>
    </div>

					<?php
                    }

					?>
</div>

</section>
</div>
		<br><br>
	
        <section class="section newsletter" id="contact">
      <div class="container">
        <div class="newsletter__content">
          <div class="newsletter__data">
            <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
            <p>SUBSCRIBE so that we will mail you all the details of new products as well as discounted products first.</p>
          </div>
          <form method="post">
          <div class="form-group">
                <label for="firstName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
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
              <input type="submit" name ="sub" class="btn btn-primary" />
          </form>
        </div>
      </div>
    </section>
    <?php
    if(isset($_POST['sub']))
    {
	$email = $_POST['email'];
    $name = $_POST['name'];
    if(mysqli_query($link,"insert into newsletter(name, email) values('$name', '$email')"))
                 	{
                        echo "<script>alert('Successfully Subscribed')</script>";
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