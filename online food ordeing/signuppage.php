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
.signup{
	background:rgba(44,62,80,0.7);
	padding:40px;
	width:250px;
	margin:auto;
	margin-top:-50px;
	height:500px;
	margin-left:600px;
}
form{
	width:240px;
	text-align:center;
}
input{
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
input[type=button]
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
input[type=button]:hover
{
	color:#fff;
	background-color:black;
}
h2{
	color:#000;
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
a{
	color:yellow;
	text-decoration:blink;
	font-family: Tahoma,Geneva,sans-serif;
	margin-left:0px;
}
a:hover{
	color:skyblue;
}


</style>
<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
<title>Untitled Document</title>
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
<div class="signup">
	<form>
	<h2 style="color:#fff;">Sign Up</h2>
	<a href="#">
	<input style="text-align:left" type="text" name="Username" placeholder="First name">
	<br><br>
	<input style="text-align:left" type="text" name="username" placeholder="Last name">
	<br><br>
	<input style="text-align:left" type="password" name="pass" placeholder="password">
	<br><br>
	<input style="text-align:left" type="password" name="pass" placeholder="Confirm password">
	<br><br>
	<input style="text-align:left;" type="text" name="email" placeholder="Email address">
	<br><br>
	<input style="text-align:left;" type="tel" name="mnumber"id="mnumber"  placeholder="Enter Mobile Number"  />
	<br><br>
	<input class="submit1_btn" name="sub" type="submit" value="Sign Up"><br><br>
	<a href="title.php" style="text-decoration:none;">Go back</a><br /><br />
	</form>
	</div>
	</body>
	</html>
	
