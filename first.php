






<html>
<head>
<style>

.v{
	    margin-left: 83px;
    border-radius: 9px;
	    width: 54px;
}
.v1{    width: 55px;
    margin-left: 92px;
    border-radius: 9x;
    border-radius: 9px;
}

.v2{
	
	    width: 56px;
    margin-left: 101px;
    margin-left: 92px;
    border-radius: 9px;
}

.a{
	
	width:130px;
}
.q{
	        margin-top: 142.5px;
    margin-left: 423px;
	
}
.a1{
	       border-radius: 9px;
    height: 32px;
    width: 202px;
    margin-left: 256px;
	
}
.b{
	
	    margin-left: 308px;
		 border-radius: 9px;
    height: 32px;
    width: 198px;
}
.c{
	
	    margin-left: 220px;
		border-radius: 9px;
    height: 32px;
    width: 198px;
}
.d{
	       border-radius: 9px;
    margin-left: 171px;
	    height: 32px;
    width: 198px;
}
.h{
	       /* left: 93px; */
     border-radius: 9px; 
    height: 32px;
    width: 198px;
    margin-left: 141px;
}
.i{
	
	   margin-left: 68px;
    border-radius: 9px;
	  height: 32px;
    width: 198px;
}



.j{
	
	   margin-left: 68px;
    border-radius: 9px;
	  height: 32px;
    width: 198px;
}


.snumb{
	 border-radius: 9px;
	  height: 32px;
    width: 198px;
	    margin-left: 244px;
	
}

.ab{
	
	font-family:Courier;
	font-size:21px;
}

.button{
	       margin-top: 145px;
	background:none;
	color:#ccc;
	width: 132px;
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
h2{   

    margin-top: -373px;
    font-size: 26px;
    height: 29px;
	 
	
	
}
.search{
	
	    width: 303px;
	
}

.b2{
	
	
	margin-top: -84px;
    margin-left: 213px;
}
</style>
</head>
<body background="bg.jpg">
<div class="q">
<form action="" method="POST" >
<font color="white" class="ab">First Name</font><input type="text"  class="snumb"  name="fname" value="<?php if(isset($_POST['name'])) echo trim($_POST['name']);?>" ></input><br>
<span id="serial" style="color=red;"></span>
<br>
<font color="white" class="ab">Last Name</font><input type="text" name="lname" value="<?php if(isset($_POST['last_name'])) echo trim($_POST['last_name']);?>" class="a1"></input><br>
<br>
<font color="white" class="ab">Email<input type="text"  name="email" value="<?php if(isset($_POST['email'])) echo trim($_POST['email']);?>" class="b"></input><br>
<br>
<font color="white" class="ab">Phone Number<input type="phone"  name="phone" value="<?php if(isset($_POST['pass'])) echo trim($_POST['pass']);?>" class="c"></input><br>
<br>

<div class="b2"><input type="submit" name="submit" class="button" value="Submit"></input></form></div>
</form>
</div>

</body>
</html>








<?php

session_start();

if($_SESSION['alpha']==1)
	
	{


$name=0; $lname=0 ;$email=0; $phone=0;



if(isset($_POST['submit'])) {
	
	
	
	
	if(isset($_POST['fname']) && ($_POST['fname']) !=''){
		
		$name=$_POST['fname'];
		
		
	}
	else{
		
		$error[]='First_name is missing';
		
	}


	
	
	if(isset($_POST['lname']) && ($_POST['lname']) !=''){
		
		$lname=$_POST['lname'];
		
	}
	else{
		
		$error[]='Last_name is missing';
		
	}

	


if(isset($_POST['email']) && ($_POST['email']) !=''){
		
		$email=$_POST['email'];
		
	}
	else{
		
		$error[]='email is missing';
		
	}

	
	if(isset($_POST['phone']) && ($_POST['phone']) !=''){
		
		$phone=$_POST['phone'];
		
	}
	else{
		
		$error[]='phone number  is missing';
		
	}

	
	
	
		if(isset($error) && count($error) >0 )
{
// we will see
foreach ($error as $value) {
	# code...
	echo $value;
	echo '<br>';


}}




if ($name !='' && $lname !='' && $email !='' && $phone !='' ){



// database connection

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password,'learn');
if (!$conn) {
    echo "not connected with database";
}
else{
	echo "";
}


$query="INSERT INTO `jerry`( `fname`, `lname`, `email`, `phone`) VALUES ('$name','$lname','$email','$phone')";

$insert=mysqli_query($conn,$query);
if(!$insert)
{
	
	
	echo "data not inserted";
	
}
else{
	
	header("location:second.php");
	
}

}



}

else{
	
	echo  'complete the form ';
	
}
	}
	
	
	
	else{
		
		
		header("location: 	loogin.php");
	}
	?>