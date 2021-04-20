<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="width=device-width" />
	<title>Digit Electronics</title>
<!-- owl carousel css file cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

	<link rel="stylesheet" href="css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	
</head>
<body>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
    <div class="container-fluid" style="background-color: grey;color: white;">
		<div class="container">
        <p class="pull-right"> E-mail : cs@digitelec.com</p>
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
								<center><h1 style="color:white;font-size:40px;"><font face ="Corbel">Admin Home</h1></font></center>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
        </div>

        <div class="container">
        

		<div class="container">
<section class="home" id="home">
<br>
<div class="home-slider owl-carousel">
<div class="item">
        <img src="img/home_img1.jpg" alt="">
        <div class="content">
            <h3>See our Products</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
            <a href="product.php"><button class="btn">Discover</button></a>
        </div>
    </div>
    <div class="item">
        <img src="img/home_img1.jpg" alt="">
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
            <a href="sell.php"><button class="btn">Discover</button></a>
        </div>
    </div>

  

    <div class="item">
        <img src="img/home_img1.jpg" alt="">
        <div class="content">
            <h3>Contact Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
            <a href="index.php"><button class="btn">Discover</button></a>
        </div>
    </div>

    

</div>
</section></div>

            <?php
              if(isset($_POST['sub']))
              {
              	 $un=$_POST['un'];
                $ps=$_POST['ps'];

                $q="select * from admin";
                $run=mysqli_query($link,$q);
                $row=mysqli_fetch_array($run);
                 $u=$row['un'];
                 $p=$row['ps'];
                if($un==$u && $ps==$p)
                {
                       header("Location:ahome.php");
                }

              }
			?>
                
				<br>
				<div class="container" style="background-color: red;color: white">
			<h2 align="center">© Copyright 2021 DigitElectronics</h2>
			</div>
			</div>
				<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"/></script>
<!-- custom js file link  -->
<script src="js/index.js"></script>
</body>
</html>







