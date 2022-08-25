<?php
	session_start();
	$con1=mysqli_connect("localhost","root","")or die("unable to connect");
	mysqli_select_db($con1,'project');
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
	font-family: arial;
		color:white;
		background:linear-gradient(
		rgba(0,0,0,0.65),rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)
		)
		,url("imgs/select2.jpg");
		background-size:cover;
		background-repeat:no-repeat,repeat;
		margin:0 auto;
		background-color:black;
}
.signin{
	background:rgba(44,62,80,0.7);
	padding:40px;
	width:250px;
	margin:auto;
	margin-top:-25px;
	height:350px;
	margin-left:600px;
}
form{
	width:240px;
	text-align:center;
}
input
{
	width:240px;
	text-align:center;
	background:transparent;
	border:none;
	border-bottom:1px solid #fff;
	font-family:'play',sans-serif;
	font-size:16px;
	font-weight:200px;
	padding:10px 0;
	transition:border 0.5s;
	outline:none;
	color:#fff;
}
.submit1_btn
{
	border:none;
	width:190px;
	background:white;
	color:#000;
	font-size:16px;
	line-height:25px;
	padding:10px 0;
	border-radius:15px;
	cursor:pointer;
}
.submit1_btn:hover
{
	color:#fff;
	background-color:black;
}
h2{
	color:white;
}
a{
	color:yellow;
	text-decoration:blink;
}
a:hover{
	color:skyblue;
}
.container{
	display:flex;
	flex-direction:row;
	width;100%;
}
::placeholder{
	color:aliceblue;
	opacity:0.8;  
}
.box{
	width: 800px;
	float:right;
	border:1px white;
	margin-top:-160px;
	}
.box ul li{
	width:120px;
	float:right;
	margin:10px auto;
    text-align:center;
	}
.box ul li a{
	text-decoration: none;
	color:#FAC42F;
	}
.box ul li a:hover{
	color:white;
	}
.logo img{ 
	float: center;
	width: 190px;
	height: 160px;
    }

</style>
<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
<title>untitled Document</title>
</head>
<body>
<div class="logo">
		<img src="imgs/logo.jpg">
	</div>
<div class="box">
	<ul type="none">
	<li><a href =""> ABOUT US</a></li>
	<li><a href ="contactpage.php"> CONTACT</a></li>
	<li><a href =""> MENU</a></li>
	<li><a href ="title.php"> HOME</a></li>
	</ul>
	</div>
    <div class="signin">
	<form class="myform" action="loginpage.php" method="post">
		<h2 style="color:white">Log In</h2>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="pass"placeholder="Password"><br><br>
		<input class="submit1_btn" name="sub" type="submit" value="Log In"><br>
		<br>
		<div id="container">
		<a href="resetpassword.php" style="margin-right:20px;font-size:13px;
		font-family:Tahoma,Geneva,sans-serif;">Reset
		password</a>
		<a href="forgetpassword.php" style="margin-right:0px;font-size:13px;
		font-family:Tahoma,Geneva,sans-serif;">Forgot
		password?</a>
		</div><br><br><br>
		Don't have account?<a href="signuppage.php">&nbsp;Sign Up</a>
	</form>
	<?php
		if(isset($_POST['sub'])){
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$sql="select * from login where username='$user'";
			$query_run=mysqli_query($con1,$sql);
			if(mysqli_num_rows($query_run)==1){
				echo '<script type="text/javascript"> alert("thank u") </script>';
			}
		}
	?>
	</div>
	<body>
	</html>
	
	
	
