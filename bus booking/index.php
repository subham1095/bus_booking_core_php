<?php
session_start();
//  if(  isset($_SESSION['goldy']) == "")
// {
//    //checking if session is blank then page wont travel 
//     header("location:index.php");
//     exit;
// }
?>

<html>
<head>
<title> Login </title>
<style>
#container	{
	width:100%;
	height:100%;
	}

#leftpart{
	width:50%;
	height:100%;
	 background-image: url("red.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
      float: right;
     /* background-color: red;*/
}
h2{
	color: red;
}
h1{
	color: red;
}
	


a:hover	{
	 background-color: #7CC5F2;
	
  color: #7CC5F2;
	text-decoration:underline;
	}

	#rightpart	{
	width:50%;
	height:100%;
	 /*background-image: url("login.jpg");
  background-repeat: no-repeat;
  background-size: cover;*/
  
      float: left;
	}

	#leftpart a{
		color: whitesmoke;
		font-size: 28;
	}

    .form-group input {
        display: block;
        text-align: center;
        width: 80%;
        padding: 8px;

        border-radius: 20px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif
    }
    .btn {
       
        background-color: #EC7063;
        color: blanchedalmond;
       width: 80%;
       padding: 8px;
        border: 2px solid #5a1212;
        border-radius: 18px;
        font-size: 14px;

    }
    #form a{
	color: red;
	text-decoration:none;
	font-size: 24px;
	font-family: arial black;
	text-shadow: hotpink 5px 0 10px;
}
    
    #form{
    	position: absolute;
	top: 17%;
	left: 10%;
	border-radius: 25px;
	padding-top: 15px;
  
  width: 34%;
  height: 70%;
  background-color: #EAF2F8;
  
  font-size: 20px;
  float: left;
}
 




</style>
</head>

</html>

<body>
<center>
<div id="container">
	
	

	
<div id="rightpart"><br><br>
	<div id="form">
        
    	<form   name="form" action="index1.php" method="POST">
<h1>Bus Reservation</h1> 
<table cellspacing="20px" cellpadding="5px" align="center">
	
	<tr class="form-group">
		<td> <input type="text" name="username" placeholder="Enter your username"></td>

	</tr>
		
	<tr class="form-group">
		<td><input type="Password" name="pswd" placeholder="Enter your Password"></td>

	</tr>
	<tr class="form-group">
		<td><select name="role">
			
			<option value="user">user
				
			
		</select></td>

	</tr>

	<tr>
		<td><button class="btn">Submit</button></td>

	</tr>
	<tr>
		<td><a href="index_form.php">Forgott Password?</a></td>

	</tr>

	</tr>
	

</table>

      </div>  
        </div>
        <div id="leftpart">
        	<a href="login.php">Sign In As Admin</a>
        	
        </div>
    
		
		

	

</div>
</center>

</body>