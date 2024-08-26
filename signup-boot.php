<?php
$server="localhost";
$username="root";
$passd="";
$dbname="website";
$connection=mysqli_connect($server,$username,$passd,$dbname);
if(!$connection){
	die("data base not connected".mysqli_connect_error());
}
if(isset($_POST["signup"]))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$password=$_POST['password'];
	$select="SELECT * FROM `order` WHERE email='".$email."' and name='".$name."' ";
	$check_query=mysqli_query($connection,$select);
	$count=mysqli_num_rows($check_query);
	$check=mysqli_fetch_assoc($check_query);
	if($count==1){
		echo "<script>alert('User Already Sign-up with same Details');</script>";
	}
	else{
		$query="INSERT INTO `order`(`name`, `email`, `mobile`, `address`, `password`) VALUES ('".$name."', '".$email."', '".$mobile."', '".$address."', '".$password."')";
		if(mysqli_query($connection,$query)){
			echo "<script>alert('Data Inserted Successfully');</script>";
			header('location:index.php');
		}
		else{
			echo "Something went worng.Please check your Details ";
		}
	}
}
?>
<html>
<head>
<title>sign-up PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
p{color:#ff0000;}
body{background-color:#e6e6e6;}
</style>
</head>
<body>
<div class="container">
	<div class="row">
	<div class="col-lg-12">
		<div class='col-lg-1'><img src="images/logo.jpg" class="img-responsive" alt="logo"></img></div>
		<div class="col-lg-11 text-right">
			<h5><span class="glyphicon glyphicon-envelope">ktharunpandya@gmail.com</span>
			<span class='glyphicon glyphicon-earphone'>7702096747</span></h5>
		</div>
	</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li name="home"><a href="index.php">Home</a></li>
					<li><a href="" name="">About</a></li>
					<li><a href="" name=""></a></li>
					<li><a href="" name="">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup-boot.php" class="active btn btn-default" name="signup" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="" name="login" class="btn btn-default" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="row">
		<div><h2 class="text-center text-info"><u>sign-up</u></h2></div>
	</div>
	<form method="post">
	<div class="row">
		<label class="col-lg-5 text-right control-label">Name:</label>
		<div class="col-lg-3">
		<input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" />
		<p id='errname'></p>
		</div>
	</div>
	<div class="row">
		<label class="col-lg-5 text-right control-label">Email:</label>
		<div class="col-lg-3">
		<input class="form-control" type="text" name="email" id="email" placeholder="Enter Email ID" />
		<p id='erremail'></p>
		</div>
	</div>
	<div class="row">
		<label class="col-lg-5 text-right control-label">Mobile:</label>
		<div class="col-lg-3">
		<input class="form-control" type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" />
		<p id='errmobile'></p>
		</div>
	</div>
	<div class="row">
		<label class="col-lg-5 text-right control-label">Address:</label>
		<div class="col-lg-3">
		<textarea name="address" id="address"></textarea>
		<p id='erraddress'></p>
		</div>
	</div>
	<div class="row">
		<label class="col-lg-5 text-right control-label">Password:</label>
		<div class="col-lg-3">
		<input class="form-control" type="password" name="password" id="password" />
		<p id='errpassword'></p>
		</div>
	</div>
	<div class="row">
		<label class="col-lg-5 text-right control-label">Confirm Password:</label>
		<div class="col-lg-3">
		<input class="form-control" type="password" name="cpassword" id="cpassword" />
		<p id='errconfirm'></p>
		</div>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-5">
	</div>
		<div class="col-lg-1 text-center">
		<input class="form-control btn btn-info" type="submit" name="signup" id="signup" onclick="return sign()" value="Sign-up" />
		</div>
	</div>
	</form>
</div>
<script>
function sign(){
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var mobile=document.getElementById('mobile').value;
	var address=document.getElementById('address').value;
	var password=document.getElementById('password').value;
	var cpassword=document.getElementById('cpassword').value;
	var regemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var regmobile=/^\d{10}$/;
	if(name==null||name=="")
	{
		document.getElementById('errname').innerHTML='*Please Enter Name';
		return false;
	}
	else if(email==null||email=="")
	{
		document.getElementById('erremail').innerHTML='*Please Enter Email ID';
		return false;
	}
	else if(!regemail.test(email))
	{
		document.getElementById('erremail').innerHTML='*Please Enter Valid Email ID';
		return false;

	}
	else if(mobile==null||mobile=="")
	{
		document.getElementById('errmobile').innerHTML='*Please Enter Mobile Number';
		return false;
	}
	else if(!regmobile.test(mobile))
	{
		document.getElementById('errmobile').innerHTML='*Please Enter Valid Mobile Number';
		return false;
	}
	else if(address==""||address==null)
	{
		document.getElementById('erraddress').innerHTML='*Please Enter Address';
		return false;
	}
	else if(password==""||password==null)
	{
		document.getElementById('errpassword').innerHTML='*Please Enter password';
		return false;
	}
	else if(cpassword!=password)
	{
		document.getElementById('errconfirm').innerHTML='*Password cannot Matched ';
		return false;
	}
}
</script>
</body>
</html>