<?php
session_start();
$rate=$_SESSION['rate11'];
$apple=$_SESSION['mobilename11'];
?>
<html>
<head>
<title>Apple 11</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
.price{color:blue;}
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
<div class="col-lg-7">
<iframe src="apple11frame.php" height="100%" width="100%" title="apple14 informatiom">
</iframe>
</div>
<div class="col-lg-5">
<?php
echo "<h2>".$apple."</h2>";
echo "<h2 class='price' ><ul>".$rate."</ul></h2>";
?>
<table>
<tr>
<table>
<tr><h4>Highlights:</h4></tr>
<td>
<li>64 GB ROM</li>
<li>16.51 cm (6.5 inch) Super Retina XDR Display</li>
<li>12MP + 12MP + 12MP | 12MP Front Camera</li>
<li>A13 Bionic Chip Processor</li></td>
</table>
</tr>
<tr><h3><u>Specifications</u></h3><tr>
<tr>
<table>
<tr><h4>General</h4></tr>
<tr>
<td>In The Box</td>
<td>Handset, EarPods with Lightning Connector, USB-C to Lightning Cable, 18W USB-C Power Adapter, Documentation</td>
</tr>
<tr>
<td>Model Number</td>
<td>MWHH2HN/A</td>
</tr>
<tr>
<td>Model Name</td>
<td>iPhone 11 Pro Max</td>
</tr>
<tr>
<td>Color</td>
<td>Midnight Green</td>
</tr>
<tr>
<td>Browse Type</td>
<td>Smartphones</td>
</tr>
<tr>
<td>SIM Type</td>
<td>Dual Sim</td>
</tr>
<tr>
<td>Hybrid Sim Slot</td>
<td>
No</td>
</tr>
<tr>
<td>Touchscreen</td>
<td>Yes</td>
</tr>
<tr>
<td>OTG Compatible</td>
<td>No</td>
</tr>
<tr>
<td>SAR Value</td>
<td>1.6 W/kg (over 1 g) SAR Limit, Head: 1.16, Body: 1.17</td>
</tr>
</table>
</tr>
<tr>
<table>
<tr><h4>Display</h4></tr>
<tr>
<td>
Display Size</td>
<td>16.51 cm (6.5 inch)</td>
</tr>
<tr>
<td>Resolution</td>
<td>2688 x 1242 Pixels</td>
</tr>
<tr>
<td>Resolution Type</td>
<td>Super Retina XDR Display</td>
</tr>
<tr>
<td>Other Display Features</td>
<td>
Dynamic Island, Always-On Display, Pro Motion Technology with Adaptive Refresh Rates Upto 120 Hz, HDR Display, True Tone, Wide Colour (P3), Haptic Touch, Contrast Ratio: 20,00,000:1, Max Brightness: 1,000 nits, Peak Brightness: 1,600 nits, Peak Brightness (Outdoor): 2,000 nits</td>
</tr>
</table>
</tr>
</table>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<form method="post" class="form-horizontal">
<input type="submit" class="form-control btn btn-warning text-left" value="Add Card"  />
</form>
</div>
<div class="col-lg-6">
<form method="post" class="form-horizontal">
<a class="form-control btn btn-danger text-left" href="signup-boot.php" >Buy</a>
</form>
</div>
</div>
</div>
</body>
</html>