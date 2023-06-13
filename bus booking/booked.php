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
  height: 80%;
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
		

	</div>
	

	
<div id="rightpart">
	<div style="float: left;"><h5>ADMIN</h5></div>
        <div style="float: right;"><h5>Logged :- <u><?php echo $_SESSION['goldy'];   ?></u>&nbsp;&nbsp;</h5></div><br>
	<div id="form">
		<h2> Booked Tickets</h2>
        
     <?php
$username=$_SESSION['goldy'];

include_once("config.php");
$sql="select * from bkbus where username='$username'";
// echo "<h3> SQL = ".$sql;
// exit();


$result=mysql_query($sql,$conn);

	echo "<table border=5 cellpadding=2px align=center bordercolor=#6C3483 >";
	echo "<tr>";
	echo "<th> PNR</th>";
	echo "<th> Username </th>";
	echo "<th>  Email </th>";
	echo "<th>  Ticket </th>";
	echo "<th>  Bno </th>";
	echo "<th>  Source</th>";
	echo "<th>  Destination</th>";
	echo "<th>  Date Of Join</th>";
	echo "<th>  Seat</th>";
	echo "<th>  Price</th>";
	echo "<th>  Total Price</th>";
	
	echo "</tr>";
	while($row=mysql_fetch_array($result))
	{
	echo "<tr>";
	$a=$row['pnr'];
	$b=$row['username'];
	$c=$row['email'];
	$d=$row['ticket'];
	$e=$row['bno'];
	$f=$row['source'];
	$g=$row['destination'];
	$h=$row['doj'];
	$i=$row['seat'];
	$j=$row['price'];
	$k=$row['tot_price'];
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	echo "<td>  ".$g."</td>";
	echo "<td>  ".$h."</td>";
	echo "<td>  ".$i."</td>";
	echo "<td>  ".$j."</td>";
	echo "<td>  ".$k."</td>";
	echo "</tr>";
	}
	echo "</table>";



?>
<br><br>
   
    <a href="search.php">Go Back</a>
<a href="logout_user.php">Logout</a>

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