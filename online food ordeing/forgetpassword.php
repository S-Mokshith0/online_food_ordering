<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" herf="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link data-require="sweet-alert@*" data-semver ="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
.forget{
	background:rgba(44,62,80,0.7);
	padding:40px;
	width:250px;
	margin:auto;
	margin-top:-50px;
	height:400px;
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
a{
	color:#E1DA00;
	text-decoration:blink;
}
a:hover{
	color:skyblue;
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
</head>

<body>
<div class="logo">
		<img src="imgs/logo.jpg">
	</div>
<div class="box">
	<ul type="none">
	<li><a href =""> ABOUT US</a></li>
	<li><a href ="contactpage.php"> CONTACT </a></li>
	<li><a href =""> MENU</a></li>
	<li><a href ="title.php"> HOME</a></li>
	</ul>
	</div>
<div class="forget">
<form>
<h2 align="center" style="color:#fff;">Forgot password?</h2>
<h5 style="font-size:20px; color:skyblue;">Enter email here that you used on your account. We will send a link on your email to reset your password.</h5>
<input type="text" name="username" placeholder="Enter your email" /><br /><br /><br>
<input type="button" value="Send" onclick="myFunction()"/><br /><br /><br><br>
<a href="loginpage.php" style="text-decoration:none;">Go back</a><br /><br />
<script>
function myFunction(){
Swal.fire({
  title: 'Link has been sent to your mail.',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
}
</script>
</form>
</div>
</body>
</html>

	