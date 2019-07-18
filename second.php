<table border="2" class="ss">
<th>ID</th>
<th>FIRST NAME</th>
<th> LAST NAME</th>
<th>EMAIL </th>
<th>PHONE NUMBER</th>
<th>DELETE</th>
<th> UPDATE</th>

<?php
session_start();
if($_SESSION['alpha']==1){


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




 


// select query start



$sql = "SELECT * FROM jerry";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	?>	
		<tr>
	<td>	<?php echo  $row["id"];?>   </td>
	<td>	<?php echo  $row["fname"];?></td>
	<td>	<?php echo  $row["lname"];?>  </td>
	<td>	<?php echo  $row["email"];?> </td>
    <td><?php echo  $row["phone"];?>     </td>
	
	
	
	
	<td><a href="del1.php?id=<?php echo  $row["id"];?>">Delete</a></td> 
	  <td> <a href="edit1.php?id=<?php echo  $row["id"];?>">Update</a></td> 
	
	
	
		</tr>

 


 <?php
}}}
else{
	header ("location:loogin.php");
}

?>
</table>














<html>
<body background="bg.jpg">
</body>
</html>
<style>
.ss{
	font-family:Courier;
	color:white;
}
a{
	color:white;
}
h1{
	
	font-family:Courier;
	color:white;
}
</style>

<form action="logout.php">

<div class="b2"><form action=""><input type="submit" name="done" class="button" value="Home"></input></form></div>

</form>
<head>
<style>
.button{
	       margin-top: 10px;
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

    input.button {
    margin-left: 263px;
    margin-top: 37px;
}
</style>
</head>