<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
*{
	margin:0;
	padding: 0;
}
body{
	font-family: sans-serif;
}
html{
	font-family: sans-serif;
}
.header{
	height: 100vh;
}
.navbar-style{
	/*box-shadow: 0 5px 10px rgba(0,0,0,0.5);*/
	background-color: rgba(0,0,0,0.5);
	min-height: 90px;
	background-color: transparent;
	border-color: transparent;
	
}
 a h4{
	/*padding-left: 0px;
	padding-right: 0px;*/
	padding-top: 14px;
	/*padding-bottom: 0px;*/
	color: red;
	font-size: 38px;
	margin-left: 0px;
	font-style: oblique;
	font-family: 'Open Sans';
	font-weight: bold;
}
#main:hover{
color: transparent;
}
p{
margin-left: 70px;
color: white;
font-style: italic;
line-height: 10px;
}
.icon-bar
{
	background: white;
}
li a
{
	font-weight: bold;
	margin-top: 25px;
	color:red;
	text-transform: uppercase;
}
.bgimage{
	background-image: url('3.png');
background-size: 100% 100%;
width: 100%;
height: 100vh;
}
.text{
width: 100%;
margin-top: 185px;
text-transform: uppercase;
text-align: center;
color: white;
}
.text h4{
font-size: 20px;
font-family: 'Open Sans',sans-serif;
font-weight: bold;
}
#one{
background-color: white;
border:none;
font-size: 12px;
font-weight: bold;
text-transform: uppercase;
line-height: 40px;
width: 150px;
font-family: 'Montserrat',sans-serif;
margin-top: 25px;
border: 3px solid white;
color: black;
}
#two{
background-color: transparent;
border:none;
font-family: 'Montserrat',sans-serif;
text-transform: uppercase;
font-weight: bold;
line-height: 40px;
border: 3px solid white;
width: 150px;
color:white;
}
.main-section{
	margin:0 auto;
	margin-top:70px;
	padding: 0;
	margin-left: 15%;

}
.modal-content{
	background-color: white;
	opacity: .8;
	padding: 0 20px;
	border-radius: 10px;
}
.user-img img{
	height: 120px;
	width: 120px;
}
.user-img{
	margin-top: -60px;
	margin-bottom: 45px;
}
.form-group{
	margin-bottom: 25px;
}
.form-group input{
	height: 42px;
	border-radius: 5px;


}
#sub{
	 background-color: gray;
  border: none;
  color: black;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
}
</style>
</head>
<body>
	<div class="bgimage">
	<header class="header">
		<nav class="navbar navbar-style">
			<div class="container">
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="main" href="#">
					<h4>Give & Live</h4>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="micon">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="trialdonors.php">Donors</a></li>
					<li><a href="trialsendreq.php">Send Request</a></li>
					<li><a href="trialviewreq.php">View Request</a></li>
					
				</ul>
			</div>
			</div>
		</nav>
			
			<div class="modal-dialog text-center">
				<div class="col-sm-9 main-section">
					<div class="modal-content">

						<div class="col-12 user-img">
							<img src="face1.png">
						</div>

						<div class="col-12 form-input">
							<form action="validlogin.php" method="POST">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Enter Email" name=email>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Enter Password" name="pass">
								</div>
								<div class="form-group">
									<input  id="sub" type="submit" value="Login" name="submit">
								</div>
							</form>
	</header>
</div>
</body>
</html>