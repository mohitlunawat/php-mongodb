<?php
require 'vendor/autoload.php';


$client=new MongoDB\Client;
$login=$client->login;
$logindet=$login->login;
$register=$login->register;
$name=$_POST['user'];
$pass=$_POST['pass'];
$result=$logindet->findOne(
['UserName'=>$name,'Password'=>$pass]

);
if($result)
{
	
	$result2=$register->find(
		['Email'=>$name]
	);
	if($result2)
	{
	
		foreach ($result2 as $row) {
			$namee=$row["FirstName"];
			$lname=$row["LastName"];
			$Cno=$row["ContactNo"];
			$email=$row["Email"];
			$dob=$row["DOB"];
		}
	}
	

}
else
{
		echo '<script type="text/javascript">'; 
        echo 'alert("Invalid Credentials");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
}
?>
<html>
<head>
	
	<style>
		.font1{
    padding-top:30px; 
        padding-left: 500px;          
    color: white;
    font-size: 50px;
    font-weight: 400;
    	

		}
    .head{
    margin-top: auto;
    width: 100%;
    height: 100px;
    background: #00bcd4;
    }
 tr
    {
    	height: 50px;
    }

</style>
	</style>
	</head>
	<body>
		<div class="head">
			<p class="font1">Your Details</p>
		</div>
		<table>
			<tr>
		<td>First Name:</td>
		<td><?php echo $namee?></td>
			</tr>
			<tr>
		<td>Last Name:</td><
		<td><?php echo $lname?></td>
		</tr>
		<tr>
			<td>Contact Number:</td>
			<td><?php echo $Cno?></td>
		</tr>
		<tr>
			<td>Mail ID:</td>
			<td><?php echo $email?></td>
		</tr>
		<tr>
			<td> Your D.O.B</td>
			<td><?php echo $dob?></td>
		</tr>
		</table></body>
		</html>