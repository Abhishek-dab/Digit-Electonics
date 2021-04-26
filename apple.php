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

        <div class="container">
				<div class="col-sm-2" style="background-color: grey;color: black">
					<h1 align="center">Brands</h1><br>
                      <center>  <p><a href="apple.php" style="color: white">Apple</a></p><br>
                         <p><a href="oneplus.php" style="color: white">OnePlus</a></p><br>
                          <p><a href="samsung.php" style="color: white">Samsung</a></p><br>
                          <p><a href="xiaomi.php" style="color: white">Xiaomi</a></p></center>

					<h1 align="center">Category</h1> <br>
                         <center>  <p><a href="laptop.php" style="color: white">Laptops</a></p><br>
                         <p><a href="phone.php" style="color: white">Mobile Phones</a></p><br>
                          <p><a href="watch.php" style="color: white">Watches</a></p><br>
                          <p><a href="tv.php" style="color: white">Televisions</a></p><br></center><br><br>
				</div>
				<br><br>
                <div class="col-sm-10">
				<?php
                $d2="Apple";
                           $q="select * from product where brand like '%$d2%'";
                            $run=mysqli_query($link,$q);
                            while($row=mysqli_fetch_array($run))
                            {
                          
                            	$id=$row['id'];
                            	$name=$row['name'];
                            	$img=$row['img'];
                            	$brand=$row['brand'];
                         ?>
                          
					<div class="col-sm-4"><center><?php echo "<img src='admin/c/$img' width='150px' height='150px'>"; ?></center>
						<h4 align="center"><?php echo $brand; ?></h4>
						<h5 align="center"><?php echo $name; ?></h5>
						<center><a href="b.php?id=<?php echo $id; ?>" class="btn btn-primary">Buy Now</a></center><br><br>
					</div>
					<?php
                    }

					?>
					
					
				</div>
                </div> 
				<br>
				<div class="container" style="background-color: red;color: white">
			<h2 align="center">© Copyright 2021 DigitElectronics</h2>
			</div>
	</div>
</body>
</html>