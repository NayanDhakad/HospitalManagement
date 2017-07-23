<script type="text/javascript">
	function checklogin(){
		var user=document.myform.username.value;
		var pass=document.myform.password.value;
		if(user.length<5){
			alert("please enter correct username");
			return false;
		}
		if(pass.length<5){
			alert("please enter correct password");
			return false;
		}


	}

</script>

<link rel="stylesheet" type="text/css" href="/login.css">
				 <!-----start-main---->
				<div class="login-form">
					<center>	<h1 id="si">Sign In</h1></center>
				<form method="post" action="/login.php" name="myform" onsubmit="return checklogin();">
					<li>
						<input type="text" class="text" placeholder="username" name="username" value="<?php
						echo $_COOKIE['username'];
						?>"	><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" placeholder="password" name="password" value="<?php
						echo $_COOKIE['password'];
						?>"><a href="#" class=" icon lock"></a>
					</li>
					<li>
						<input type="checkbox" name="remember" value="cheq">
						Remember me
					</li>
				
						<input type="submit" value="Sign In" name="submit" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
					</div>
				</form>
			</div>