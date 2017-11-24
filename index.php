<html>
<title></title>
<head>
	<style>
	.font1{
    padding-top:120px; 
        padding-left: 40px;          
    color: #fff;
    font-size: 56px;
    font-weight: 400;
    line-height: 1.5;
    margin-left: 350px;
}
    .head{
    margin-top: auto;
    width: 100%;
    height: 250px;
    background: #00bcd4;
    }
    .fo
    {
    	color:#00bcd4;
    	font-size: 30px;
    	font-weight: 400;
    }
    tr
    {
    	height: 50px;
    }
    button{
     background-color: #00bcd4;
    border: none;
    color: white;
    padding: 10px 32px;
     font-size: 16px;
}
	</style>
	<script type="text/javascript">
		function myfun()
		{
			window.location.href = "first.php";
		}
	</script>
</head>
<body>
 <div class="head"><p class="font1">WELCOME USER</p></div>
 	<center>
 	<div><p class="fo">LOGIN</p>
 		<form method="POST" action="login.php">
 		<table>
 			<tr>
 		<td>Enter Your Username</td>
 		<td><input type="text" name="user" placeholder="Enter your mail"></td>
 			</tr>
 		<tr>
 			<td>Enter Your Password</td>
 			<td><input type="password" name="pass"></td>
 		</tr>
 		<tr>
 		<td><button type="submit" value="submit">LOGIN</button></td>
 		<td>OR</td>
 		<td><button type="button" value="submit" onclick="myfun();">SIGNUP</button></td>
 		</tr>
		</table>
	</form>
</div>
 	</center>


</body>
