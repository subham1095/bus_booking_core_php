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
	 background-image: url("b.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
      float: right;
     /* background-color: red;*/
}
h2{
	color: green;
}
h1{
	color: green;
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
  background-color: #85C1E9;
      float: left;
	}

    .form-group input {
        display: block;
        text-align: center;
        width: 40%;
        border-radius: 11px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif
        padding-top: 20px;
    }
     .btn {
        
        background: #7CC5F2;
/*background-image: radial-gradient(purple,hotpink,deeppink);*/
        color: blanchedalmond;
        border: 2px solid #5a1212;
        border-radius: 9px;
        font-size: 20px;
        text-align: center;
        width: 290px;

    }
    #form a{
	color:navy;
	text-decoration:none;
	font-size: 24px;
	font-family: arial black;
	text-shadow: hotpink 5px 0 10px;
}
    
    #form{
    	position: absolute;
	top: 20%;
	left: 13%;
	border-radius: 25px;
	padding-top: 15px;
  
  width: 34%;
  height: 60%;
  background-color: #F0F3F4 ;
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
        
       <?php
	$aa=$_POST['username'];
	$bb=$_POST['pswd'];
	$cc=$_POST['role'];
	// $cc=$_POST['type_user'];

	$flag=0;

	$_SESSION['goldy']=$aa;

	 //  echo $_SESSION['goldy'];
	 // exit();



	include("config.php");
	
	$sql="select * from userdetails where username='$aa' AND pswd='$bb' AND role='$cc'";
	// echo "$sql";
	// exit();
	$result=mysql_query($sql,$conn);
	// $res=mysql_fetch_array($result);
	if($result)
	{
	while($row=mysql_fetch_array($result))
	{
		
		$a=$row['email'];
		$_SESSION['boldy']=$a;
		
		echo "<h2>Logged in Successful</h2>";
		echo "<h1>User $aa </h1>";
		
		
		echo "<h2><a href='search.php'>proceed</a></h2>";
	}
}

	else
		
		{

		echo "<h4>No Data Found</h4>";
		echo "<h4>Login Failed</h4>";
		echo "<h2><a href='index.php'>Go to Login Page</a></h2>";
		}
	
?>

      </div>  
        </div>
        <div id="leftpart">

        	
        </div>
    
		
		

	

</div>
</center>

</body>