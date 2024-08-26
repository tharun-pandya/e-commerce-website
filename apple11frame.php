<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body{background-color:#e6e6e6;}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-2 col-xs-2">
</div>
<div class="col-lg-2 col-xs-2">
<img src="images/apple11green.jpg" width="120px" onclick="click1()" class="img-responsive text-center" ></img>
</div>
<div class="col-lg-2 col-xs-2">
<img src="images/apple11green-2.png" width="120px" onclick="click2()" class="img-responsive" ></img>
</div>
<div class="col-lg-2 col-xs-2">
<img src="images/apple11green-4.jpg" width="120px" onclick="click4()" class="img-responsive" ></img>
</div>
<div class="col-lg-2 col-xs-2">
<img src="images/apple11green-3.jpg" width="120px" onclick="click3()" class="img-responsive" ></img>
</div>
<div class="col-lg-2 col-xs-2">
</div>
</div>
<div class="row img-responsive" id="image" >
</div>
</div>
<script>
document.getElementById('image').innerHTML="<img src='images/apple11green.jpg' width='100%' class='img-responsive'></img>";
function click1(){
	document.getElementById('image').innerHTML="<img src='images/apple11green.jpg' width='100%' class='img-responsive'></img>";
}
function click2(){
	document.getElementById('image').innerHTML="<img src='images/apple11green-2.png' width='100%' class='img-responsive'></img>";
}
function click3(){
	document.getElementById('image').innerHTML="<img src='images/apple11green-3.jpg' width='100%' class='img-responsive'></img>";
}
function click4(){
	document.getElementById('image').innerHTML="<img src='images/apple11green-4.jpg' width='100%' class='img-responsive'></img>";
}
</script>
</body>
</html>