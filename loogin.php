

<html>

<head>
<style>
.ab{
	
	font-family:Courier;
	font-size:21px;
}

.c{
	
	    margin-left: 53px;
		border-radius: 9px;
    height: 32px;
    width: 198px;
}
.d{
	       border-radius: 9px;
    margin-left: 55px;
	    height: 32px;
    width: 198px;
}

.button{
	margin-left:133px;
	       margin-top: 23px;
	background:none;
	color:#ccc;
	width: 93px;
    height: 47px;
	border: 1px solid #fff;
	font-size:18px;
	border-radius:4px;
	transition:.6s;
	   
	overflow:hidden;
	
}
.button:hover{
	background-color: grey  ;
	
}
.first{
	
	    margin-left: 469px;
    margin-top: 194px;
}
.ss{
	font-family:Courier;
	color:white;
}
</style>
</head>
<body background="bg.jpg">
<div class="first">
<form action="" method="POST" >
<font color="white" class="ab">Username<input type="text"  name="username" class="c" ></input><br>
<br>
<br>
<font color="white" class="ab">Password<input type="password" name="password"  class="d"></input><br>
<br>
<input type="submit" name="done" class="button" value="Login"></input></form>

</form>
</div>
<br>
<br>
<br>

</body>
</html>



<?php
session_start();
$conn = mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"learn");
if(!$db)
{
echo " not connected";


}
else{
echo "  connected";
}



if(isset($_POST['username']) && isset($_POST['password'])){

$uname=$_POST['username'];
$pass=$_POST['password'];
 
 
 
$query=mysqli_query($conn,"SELECT * FROM `logindata` WHERE username='$uname' && password='$pass'");
$result=mysqli_num_rows($query);

	if($result==true)
	{ 
 
 $_SESSION['alpha']=1;

		header("location: 	first.php");
	}
	else{
		echo "login fail";
	}
}
 


 ?>

