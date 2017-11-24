<html>
<title></title>
<head>
	<style>
		.font1{
    padding-top:30px; 
        padding-left: 500px;          
    color: #fff;
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
button{
     background-color: #00bcd4;
    border: none;
    color: white;
    padding: 10px 32px;
     font-size: 16px;
}

</style>
</head>
<body>
	<div class="head"><p class="font1">Enter Your Details</p></div>
	<form method="POST" action="register.php">
		<table>
			<tr>
		<td>Enter Your First Name:</td>
		<td><input type="text" name="fname"></td>
			</tr>
			<tr>
		<td>Enter Your Last Name:</td><
		<td><input type="text" name="lnam"></td>
		</tr>
		<tr>
			<td>Enter Your Contact Number:</td>
			<td><input type="text" name="cno"></td>
		</tr>
		<tr>
			<td>Enter Your Mail ID:</td>
			<td><input type="email" name="mail"></td>
		</tr>
		<tr>
			<td>Enter Your D.O.B</td>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<td>Choose A Passowrd</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>Confirm  Passowrd</td>
			<td><input type="password" name="pass1"></td>
			</tr>		
		</table><button type="submit" value="SAVE">SAVE</button>
	</form>
</body>
</html>
