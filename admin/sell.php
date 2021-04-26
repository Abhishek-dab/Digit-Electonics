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
    <link rel="stylesheet" href="css/style.css">
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
								<li><a href="sell.php"><font color="white">Orders List</font></a></li>
                                <li><a href="contacts.php"><font color="white">Contact Form</a></font></li>
                                <li><a href="subs.php"><font color="white">News Letter Subscriptions</a></font></li>
                               <li><a href="index.php"><font color="white">Log Out</a></font></li>
                               </ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
        </div>

        <div class="container">
        <h1>Order List</h1><br><br>
        <table class="table" id="customers">
                 <tr>
                     <th>Product Name</th>

                      <th>Brand</th>
                       <th>Category</th>
                        <th>Price</th>
                         <th>Customer's Name</th>
                          <th>Address</th>
                           <th>City</th>
                           <th>state</th>
                            <th>Pin Code</th>
							<th>Mobile Number</th>
                 </tr>
                 <?php
                  $q="select * from sell";
                  $run=mysqli_query($link,$q);
                  while($row=mysqli_fetch_array($run))
                  {

                       $pname=$row['pname'];
                       $brand=$row['brand'];
                       $cat=$row['cat'];
                       $price=$row['price'];
                       $name=$row['name'];
                       $add1=$row['add1'];
                       $city=$row['city'];
                       $state=$row['state'];
                       $mno=$row['mno'];
                       $pin=$row['pin'];

                  ?>
                  <tr>
                  	<td><?php echo $pname; ?></td>
                  	<td><?php echo $brand; ?></td>
                  	<td><?php echo $cat; ?></td>
                  	<td><?php echo $price; ?></td>
                  	<td><?php echo $name; ?></td>
                  	<td><?php echo $add1; ?></td>
                  	<td><?php echo $city; ?></td>
                  	<td><?php echo $state; ?></td>
					<td><?php echo $pin; ?></td>
                  	<td><?php echo $mno; ?></td>
                  
                  <?php
                  }
                 ?>
				</table>
				
                </div> 
				<br><br>
				<div class="container" style="background-color: red;color: white">
			<h2 align="center">© Copyright 2021 DigitElectronics</h2>
				</div></div>
</body>
</html>







