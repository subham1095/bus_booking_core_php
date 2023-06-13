<?php
session_start();
 if(  isset($_SESSION['goldy']) == "")
{
   //checking if session is blank then page wont travel 
    header("location:index.php");
    exit;
}
?>

<html>
<head>
<title> Login </title>
<style>
#container	{
	width:80%;
	height:95%;
	}

#banner {
	width:100%;
	height:19%;
	text-align: center;
	background-color: #7CC5F2;
    

	}
	
a{
	 background-color: #7CC5F2;
	
  color: Blue;
	text-decoration:underline;
	}

a:hover	{
	 background-color: #D2B4DE;
	
  color: white;
	text-decoration:underline;
	}
      tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}
td{
    padding: 5px;
    font-size: 13px;
    color: #4A235A;
     font-family: fantasy;
}
th{
    padding: 5px;
}

	#rightpart	{
	width:100%;
	height:69%;
	 background-image: url("bg15.jpg");
  background-repeat: no-repeat;
  background-size: cover;
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
   /* #form a{
	color:hotpink;
	text-decoration:none;
	font-size: 24px;
	font-family: arial black;
	text-shadow: hotpink 5px 0 10px;
}*/
    h1{
    	color: #633974;
    	text-shadow: #FC0 1px 0 10px;
    }
    h2{
      color: #633974;
      text-shadow: #FC0 1px 0 10px;
    }
    h5{
      color: white;
      text-shadow: #FC0 1px 0 10px;
    }
    #form{
	
  
  width: 70%;
  height: 85%;
  background-color: #F0F3F4 ;
  font-size: 20px;
 
}

    #footer2 {
	clear: both;
	background: navy;

	height:8%;
	}

#ft	{
	padding-top:10px;
	color:white;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	}




</style>
</html>

<body>
<center>
<div id="container">
	<div id="banner">
		<h1>Admin Module</h1>
		<h2>Employee Management System</h2>

	</div>
	

	
<div id="rightpart">
	<div style="float: left;"><h5>ADMIN</h5></div>
        <div style="float: right;"><h5>Welcome:-<?php echo $_SESSION['goldy'];  ?></h5></div><br>
	<div id="form">
        
        <form   name="form"  method="POST">
<h2>Avalable Buses</h2> 

  <?php


$source=$_POST['source'];
$destination=$_POST['destination'];

$doj=$_POST['doj'];
// echo"$doj";
// 		exit();

 include_once("config.php");


if($source=="" || $destination="" || $doj="")
	{
		echo "<br>";
		echo "<br>";
		echo "<h1>The source destination and date  field can't be empty</h1>";
		echo "<br>";
		echo "<br>";
		echo "<h2><a href='search.php'>Go Back</a></h2>";
	}
else
	{

		$source=$_POST['source'];
$destination=$_POST['destination'];

$doj=$_POST['doj'];
include_once("config.php");
		$sql="SELECT * FROM bus_schedule WHERE source='$source' AND destination='$destination' AND doj='$doj'";
		// echo"$sql";
		// exit();
		// $flag=0;//false;
		$result=mysql_query($sql,$conn);
		$res=mysql_fetch_array($result);
		if($res)
		{
			// $flag=1;//true;
			$sql="SELECT * FROM bus_schedule WHERE source='$source' AND destination='$destination' AND doj='$doj'";


	 $result=mysql_query($sql,$conn);
	 // echo "<h2> FETCHING DATA OF ROLL NO. = $emp_id ";
	echo "<table border=5 cellpadding=2px align=center bordercolor=#6C3483;>";
	 echo "<tr>";
	echo "<th> bno  </th>";
	echo "<th> source  </th>";
	echo "<th>  destination </th>";
	echo "<th>  doj </th>";
	echo "<th> seat</th>";
	echo "<th>  price </th>";
	echo "<th>  Action </th>";
	
	
	
	echo "</tr>";
		while($row=mysql_fetch_array($result))
		{
	$a=$row['bno'];
	$b=$row['source'];
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];
	// $g=$row['emp_join_date'];

	
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	echo "<td>  <a href='confirmbook.php?bno=$a'>Book Now</a> </td>";
	
	echo "</tr>";

	}
	echo "</table>";
		}
		else{
		echo "<h4><font color='red'>Bus route not found</font></h4>";
		echo "<a href='search.php'>Try one more time</a>";
		echo "<br> <br>";
		}
	
		
	
}

?>

  <div >   
<br>


</div>

</form>
<a href="search.php">Go Back</a>

</div>
       
        </div>
        
    
		
		

	<div id="footer2">
		<div id="ft">
&copy; Copyright and Trademark belongs to 		 @CHOUDHURY | &phone;033-40037224
		</div>
	</div>

</div>
</center>

</body>