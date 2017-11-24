<?php
require 'vendor/autoload.php';


$client=new MongoDB\Client;
$login=$client->login;
$register=$login->register;
$logindet=$login->login;

$fname=$_POST['fname'];
$lname=$_POST['lnam'];
$cno=$_POST['cno'];
$mail=$_POST['mail'];
$date=$_POST['date'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
if(empty($fname)||empty($lname)||empty($cno)||empty($mail)||empty($date))
{
	echo '<script type="text/javascript">'; 
        echo 'alert("Please Enter all the values");'; 
        echo 'window.location.href = "first.php";';
        echo '</script>';

}
else
{
if($pass==$pass1)
{
$insert=$register->insertOne(
['FirstName'=>$fname,'LastName'=>$lname,'ContactNo'=>$cno,'Email'=>$mail,'DOB'=>$date]
);

$insert2=$logindet->insertOne(
['UserName'=>$mail,'Password'=>$pass]

);
		echo '<script type="text/javascript">'; 
        echo 'alert("SUCCESSFULLY REGISTERD PLEASE LOGIN");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
}
else
{
	  	echo '<script type="text/javascript">'; 
        echo 'alert("Password Not Matched");'; 
        echo 'window.location.href = "reg.php";';
        echo '</script>';
}


}
?>