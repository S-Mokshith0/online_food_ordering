<html>
<head>
<style>
	body{
		font-family: arial;
		color:white;
		background:linear-gradient(
		rgba(0,0,0,0.65),rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)
		)
		,url("imgs/background2.jpg");
		background-size:cover;
		background-repeat:no-repeat,repeat;
		margin:0 auto;
		background-color:black;
	}
	
	
.box{
	width: 800px;
	float:right;
	border:1px white;
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
.box a.active {
    background-color:white;
    color: black;
}
.button{
	position:absolute;
	top:70%;
	left:50%;
	transform:translate(-50%,-50%);
    }
.button :hover{
	background-color:black;
	}
.button :hover{
	color:white;
	}

.btn{
	border: 1px solid #000;
	padding: 10px 30px;
	color: black;
	text-decoration: none;
	font-family:fantasy;
	font-size:25px;
    }
			
.title{
	position:absolute;
	top:60%;
	left:50%;
	transform:translate(-50%,-50%);
	color:white;
	}
.logo img{ 
	float: center;
	width: 190px;
	height: 160px;
    }
.title h1{
	font-size:60px;
	font-family:century gothic;
    }
			
</style>
</head>
<body>
	<div class="box">
	<ul type="none">
	<li><a href =""> ABOUT US</a></li>
	<li><a href ="contactpage.php"> CONTACT</a></li>
	<li><a href ="menumainpage.php"> MENU</a></li>
	<li><a href ="title.php" style="color:white"> HOME</a></li>
	
	</ul>
	</div>
	<div class="logo">
		<img src="imgs/logo.jpg">
	</div>
	
	<div class="title" >
			<h1>Hungry For Biryani?</h1>
			</div>
			
			<div class="button">
			<br><br><br>
				<a href="loginpage.php" class="btn">ORDER NOW</a>
			<div>
	
	
</body>
</html>