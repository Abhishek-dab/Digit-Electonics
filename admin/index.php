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
								    <ul class="nav navbar-nav">
								<li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
								<li><a href="product.php"><font color="white">Product</font></a></li>
								<li><a href="sell.php"><font color="white">Sell</font></a></li>
								<li><a href="index.php"><font color="white">Log Out</a></font></li>
								</ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
        </div>

        <div class="container">
        <h1>Owner Login</h1><br><br>
				<form action="" method="post">
				<table class="table">
					<tr> 
					<td>Enter Username</td>
					<td><input type="text" name="un" placeholder="Enter Username" class="form-control" required="required"></td>
				    </tr>
				    <tr>
					<td>Enter Password</td>
					<td><input type="password" name="ps" placeholder="Enter Password" class="form-control" required="required"></td>
				    </tr>
				    <tr>
				    	<td colspan="2"><input type="submit" name="sub" value="Login" class="btn btn-primary"></td>
				    </tr>
				</table>
			</form><br><br>
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
                </div> 
				<br><br>
				<div class="container" style="background-color: red;color: white">
			<h2 align="center">© Copyright 2021 DigitElectronics</h2>
				</div></div>
</body>
</html>







