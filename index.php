<?php
$server="localhost";
$user="root";
$pass="";
$dbname="website";
$connect=mysqli_connect($server,$user,$pass,$dbname);
if(!$connect){
	die("something went wrong please check code".mysqli_error());
}
//else{echo"<script>alert('connected')</script>";}
session_start();
if(isset($_GET['apple14'])){
	$mobile=$_GET["mobilename"];
	$price=$_GET["rate"];
	$_SESSION['mobilename']=$mobile;
	$_SESSION['rate']=$price;
	echo "<script>alert('$mobile');</script>";
	$select="SELECT * FROM `order` WHERE email='".$email."' and name='".$name."' ";
	$check_query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($check_query);
	$check=mysqli_fetch_assoc($check_query);
	if($count==1){
		$updatequery="UPDATE `order` SET `orders`='".$mobile."'WHERE `email`='".$email."'";
	}
	else{
		header('location:apple14.php');
	}
}
if (isset($_GET["apple11"])) {
		$mobile11=$_GET['mobilename11'];
		$price11=$_GET["rate11"];
		$_SESSION['mobilename11']=$mobile11;
		$_SESSION['rate11']=$price11;
		echo "<script>alert('$mobile11');</script>";
		$select="SELECT * FROM `order` WHERE email='".$email."' and name='".$name."' ";
		$check_query=mysqli_query($connect,$select);
		$count=mysqli_num_rows($check_query);
		$check=mysqli_fetch_assoc($check_query);
		if($count==1){
			$updatequery="UPDATE `order` SET `orders`='".$mobile11."'WHERE `email`='".$email."'";
		}
		else{
			header('location:apple11.php');
		}
}

?>
<html>
<head>
<title>shopping site</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
form{text-align:center;}
.leftwell{margin-top:40px}
.space{margin-top:20px}
body{background-color:#e6e6e6;}
</style>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<div class='col-lg-1'><img src="images/logo.jpg" class="img-responsive" alt="logo"></img></div>
		<div class="col-lg-11 text-right">
			<p><span class="glyphicon glyphicon-envelope">ktharunpandya@gmail.com</span>
			<span class='glyphicon glyphicon-earphone'>7702096747</span></p>
		</div>
	</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class="active" name="home"><a href="">Home</a></li>
					<li><a href="" name="">About</a></li>
					<li><a href="" name=""></a></li>
					<li><a href="" name="">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup-boot.php" name="signup" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="" name="login" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-8">
			<form class="form-horizontal" align="center">
				<div class="form-group" align="center">
					<div class="col-lg-4">
						<input class="form-control" type="text" placeholder="Search" name="search"></input>
					</div>
					<div class="col-lg-2">
						<button class="form-control btn btn-default" type="button" >
							<span>Search</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
	</div>
	<div class="row">
		<div class="col-lg-3 well well-lg">
			<div>
				<ul>
					<li><b><u>Trending</u><b></li>
					<li><a href="">New Items</a></li>
					<li><a href="">Best Sellers</a></li>
				</ul>
			</div>
			<div class="leftwell">
				<ul>
					<li><b><u>Categories</u></b></li>
					<li><a href="">Men's Fashions</a></li>
					<li><a href="">Women"s Fashions</a></li>
					<li><a href="">Kids Fashions</a></li>
					<li><a href="">Traditional</a></li>
					<li><a href="">Foot Wear</a></li>
					<li><a href="" class="active" >Mobiles</a></li>
					<li><a href="">Jewellery</a></li>
					<li><a href="">Makeup</a></li>
					<li><a href="">Skin Care</a></li>
					<li><a href="">House Material</a></li>
					<li><a href="">Toys</a></li>
					<li><a href="">Food</a></li>
				</ul>
			</div>
			<div class="leftwell">
				<ul>
					<li><b><u>Other</u></b></li>
					<li><a href="">Offer Zone</a></li>
					<li><a href="">Games</a></li>
					<li><a href="">Collections</a></li>
					<li><a href="">Add Cart</a></li>
					<li><a href="">Likes</a></li>
					<li><a href="">Orders</a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
		</div>
		<form class="form-horizontal" method="get" action="" >
			<div class="col-lg-9">
				<div class="col-lg-3">
					<img src="images/apple14.jpg" class="img-responsive text-center" ></img>
					<input type="text" name="mobilename" value="APPLE iPhone 14 Pro Max (Space Black, 128 GB)" readonly/><input type="text" name="rate" value="1,39,900rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="apple14" class="btn btn-warning" value="Buy" />
					</div>
				</div>
				<div class="col-lg-3">
					<img src="images/apple13.jpg" class="img-responsive"></img>
					<input type="text" name="mobilename13" value="APPLE iPhone 13Pro Max" readonly/><input type="text" name="rate13" value="1,57,900rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="apple13" class="btn btn-warning" value="Buy" />
					</div>
				</div>
				<div class="col-lg-3">
					<img src="images/apple12black.jpg" class="img-responsive" ></img>
					<input type="text" name="mobilename12" value="APPLE iPhone 12Pro Max" readonly/><input type="text" name="rate12" value="1,19,000rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="apple12" class="btn btn-warning" value="Buy" />
					</div>
				</div>
			</div>
			<div class="col-lg-9 space">
				<div class="col-lg-3">
					<img src="images/apple11green.jpg" class="img-responsive"></img>
					<input type="text" name="mobilename11" value="APPLE iPhone 11Pro Max" readonly/><input type="text" name="rate11" value="95,699rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="apple11" class="btn btn-warning" value="Buy" />
					</div>
				</div>
				<div class="col-lg-3">
					<img src="images/1plus2tgray.jpg" class="img-responsive"></img>
					<input type="text" name="1plus2tname" value="One Plus 2T " readonly/><input type="text" name="1plus2t" value="1,39,900rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="1plus2t" class="btn btn-warning" value="Buy" />
					</div>
				</div>
				<div class="col-lg-3">
					<img src="images/1plus10problack.jpg" class="img-responsive"></img>
					<input type="text" name="1plus10proname" value="One Plus 10Pro" readonly/><input type="text" name="1plus10pro" value="1,39,900rs" readonly/>
					<div class="col-lg-3">
					<input type="submit" name="1plus10pro" class="btn btn-warning" value="Buy" />
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>