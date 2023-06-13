<html>
<head>
<title> Login </title>
<style>
#container	{
	width:100%;
	height:100%;
	background-image: url("bg2.jpeg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  position: absolute;
	}

#form{
	/*background-color: red;*/
	position: absolute;
	top: 180;
	left: 550;
	height: 62%;
	width: 27%;
}
 .form-group input {
        display: block;
        text-align: center;
        width: 80%;
        padding: 3px;

        border-radius: 20px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif
    }
    .btn {
       
        background-color: darkgreen;
        color: blanchedalmond;
       width: 80%;
       padding: 8px;
        border: 2px solid #5a1212;
        border-radius: 18px;
        font-size: 14px;

    }

    
    
    

	








</style>
</head>

</html>

<body>

<div id="container">


	<div id=form>
		<form   name="form" action="login1.php" method="POST">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;Admin Login</h1> 
<table cellspacing="20px" cellpadding="5px">
	<tr class="form-group">
		<td> <input type="text" name="username" placeholder="Enter your Name"></td>

	</tr>

	<tr class="form-group">
		<td><input type="Password" name="pswd" placeholder="Enter your Password"></td>

	

	<tr>
		<td><button class="btn">Submit</button></td>

	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index_form.php">Forgott Password?</a></td>

	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Passenger Login</a></td>

	</tr>

</table>



</div>
</form>

</div>
		
	</div>
	

	

        
    
		
		

	

</div>


</body>