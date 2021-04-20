<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<meta name="viewport" content="widtd=device-widtd" />
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
								<li><a href="index.php"><font color="white">Log Out</a></font></li>
								</ul>
								<div>
								</nav>
								</div>
								</div> <!-- row End -->
								</div> <!-- contener end -->
        </div>

        <div class="container">
        <h1 align="center">Insert Product</h1><br><br><br><br>
        <form action="" metdod="post" enctype="multipart/form-data">
        <table class="table" id="customers">
                      <tr>
                      	<td>Name</td>
                      	<td><input type="text" name="name" placeholder="Enter Product Name" class="form-control" required="required"></td>
                      </tr>
                         <tr>
                      	<td>Category</td>
                      	<td>
                         <select name="cat">
                         	<option>Laptops</option>
                         	<option>Televisions</option>
                         	<option>Mobile Phones</option>
                         		<option>Watches</option>
                         </select>
                      	</td>
                      </tr>
                         <tr>
                      	<td>Brand</td>
                      	<td>
                      		 <select name="brand">
                         	<option>Apple</option>
                         	<option>OnePlus</option>
                         	<option>Samsung</option>
                         		<option>Xiaomi</option>
                         </select>
                      	</td>
                      </tr>
                         <tr>
                      	<td>Image</td>
                      	<td><input type="file" name="img"></td>
                      </tr>
                         <tr>
                      	<td>Price</td>
                      	<td><input type="text" name="price" placeholder="Enter Price" class="form-control" required="required"></td>
                      </tr>
                         <tr>
                      	<td colspan="2"><input type="submit" name="sub" value="Save"></td>
                      	
                      </tr>

				</table>
                </form>
			<?php
             if(isset($_POST['sub']))
             {
             	$name=$_POST['name'];
             	$cat=$_POST['cat'];
             	$brand=$_POST['brand'];
             	$price=$_POST['price'];
             	
             	$image=$_FILES['img']['name'];
            $image_tmp=$_FILES['img']['tmp_name'];
	        move_uploaded_file($image_tmp,"c/$image");

	        if(mysqli_query($link,"insert into product (name,cat,brand,price,img) value('$name','$cat','$brand','$price','$image')"))
	        {
	        	  echo "<script>alert('Data Save')</script>";
	        }
	        else
	        {
	        	 echo "<script>alert('Data Not Save')</script>";
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







