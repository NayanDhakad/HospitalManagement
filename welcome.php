
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
   		<div class="navbar navbar-header">
   			<a href="#" class="navbar-brand" style="color:white;font-weight: 40px;">manit</a>
   		</div>
   		<ul class="nav navbar-nav">
   			<li><a href="#">Home</a></li>
   		</ul>
   		<ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">
   			<li><a href="/logout.php">logout</a></li>
   		</ul>
   </div>
   <br><br><br><br><br><br><br><br><br><br><br><br>
   <div class="container-fluid">
   	 	<div class="row">
   	 		<div class="col-md-2"></div>
   	 		<div class="col-md-8">
   	 			<div class="panel panel-info">
   	 				<div class="panel-heading">
   	 					WELCOME <?php
$name=$_SESSION['name'];
echo $name;
echo $_COOKIE['username'];



?>
   	 				</div>
   	 				<div class="panel-body">
   	 					ALL Email-id is <?php $email=$_SESSION['email'];
echo $email;?>
 or use these session variable according to your requirment:
   	 				</div>
   	 				<div
   	 				 class="panel-footer">
   	 					
   	 				</div>
   	 			</div>
   	 		</div>
   	 		<div class="col-md-2"></div>
   	 	</div>
   </div>
</body>
</html>