<?php
session_start();
 if(  isset($_SESSION['goldy']) == "")
{
   //checking if session is blank then page wont travel 
    header("location:index_form.php");
    exit;
}

include_once("config.php");
if(isset($_REQUEST['submit']))
{

   $bno=$_POST['bno'];
   $source=$_POST['source'];
   
   $destination=$_POST['destination'];
   $doj=$_POST['doj'];
    $seat=$_POST['seat'];
   
   //  echo "$seat";
   // exit();
   $price=$_POST['price'];
   

   
  
            $sql="INSERT INTO `bus_schedule` SET                            
                                  
                                  `bno`='".$bno."',
                                  `source`='".$source."',
                                  `destination`='".$destination."',
                                  `doj`='".$doj."',
                                  `seat`='".$seat."',
                                  `price`='".$price."'
                                  ";
   //  echo "$query_emp";
   // exit();
            $result=mysql_query($sql,$conn);  
      if($result)
              {
                   echo "<script>alert('Bus Added Successfully');
                window.location = 'addbusadmin2.php';</script>";
                  
              }
              else
              {
                echo "<script>alert('Employee Creatation Unsuccessful');</script>";
              }
 }





?>
<html>
<title>Bus Management System</title>
<head>
<style>

#container  {
      width:100%;
      height:100%;
       background-color: #B3B6B7;
    }


#banner   {
      width:100%;
      height:20%;
      background-image: url("bg9.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
 /* background-color: red;*/
    
    }
    h1    {
      font-size:35px;
      font-weight:bold;
      font-family:tahoma;
      text-shadow: #FC0 1px 0 10px;
      color: darkgreen;
    }




#middle   {
      width:60%;
      height:65%;
      font-weight:bold;
      background-color: whitesmoke;
      position: absolute;
      left: 30%;
      top: 30%;
      border-radius: 20px;
      

    
        
    }

    #middle tr{
    	background-color: #CCC;

    }
    #middle td{
    	padding: 10px;
    	
    }
   /* tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}*/

    td input  {
        display: block;
        text-align: center;
        width: 90%;
        

        border-radius: 10px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif
    }
    td select  {
        display: block;
        text-align: center;
        width: 90%;
        

        border-radius: 10px;
        font-size: 17px;
        font-family: 'Times New Roman', Times, serif
    }
    td label{
      font-size: 20px;
        font-family: 'Times New Roman', Times, serif
        bold;
        color: green;
    }

a:hover {
   background-color: #D2B4DE;
  
  color: white;
  /*text-decoration:none;*/
  }
  }

a{
  color:white;
  text-decoration:none;
  font-size: 15px;
  font-family: arial black;
  text-shadow: hotpink; 5px 0 10px;
}
    

#right    {
      float:right;
      width:20%;
      height:380px;
      color:#0CB716;
      font-weight:bold;
      
        
    }
li    {
      list-style-type: none;
      font-size:15px;
      font-weight:bold;
      padding: 10px;
      
      
      
    }
/* h2{
        color: navy;
        text-shadow: #FC0 1px 0 10px;
    }*/



h2    {
      font-size:35px;
      font-weight:bold;
      font-family:tahoma;
      text-shadow: #FC0 1px 0 10px;
      color: navy;
    }

#left   {
      float:left;
      background:#042E02;
      height:80%;
      width: 15%;
      
      
    }
          


#button   {
      background:#4AE103;
      height:30px;
      width:100px;
      border-radius:5px;
      font-family:tahoma;
      text-align:center;
      font-weight:bold;
      font-size:15px;
    }
    .btn {
        
        background: #1ABC9C;
/*background-image: radial-gradient(purple,hotpink,deeppink);*/
        color: blanchedalmond;
        border: 2px solid #5a1212;
        border-radius: 9px;
        font-size: 20px;
        text-align: center;
        width: 290px;

    }
    table{
    	text-align: center;

    }

    
    		
    









</style>




</head>
<body>
<center>
  <div id="container">
    
    

    <div id="banner"></div>
    
    
      <div id="left">
        </br>
        <input type="button" name="admin" value="Admin" id="button">  

        </br>
      <table>
                </br>

                <tr>
                <td>
                <li><a href="dashboard.php" style="color: whitesmoke;">Dashboard</a></li></td></tr>

                <tr>
                <td>
                <li><a href="addbusadmin1.php" style="color: whitesmoke;">ADD BUS</a></li></td></tr>
    
            
                <tr>
                <td>
                <li><a href="addbusadmin2.php" style="color: whitesmoke;">VIEW BUS</a></li></td></tr>
                
                <tr>
                <td>
                <li><a href="cancel.php" style="color: whitesmoke;">CANCEL BUS</a></li></td></tr>
            
            
                <tr>
                <td>
                <li><a href="search.php" style="color: whitesmoke;">SEARCH BUS</a></li></td></tr>


                

               


                
            
    

                

                <tr>
                <td>
                <li><a href="logout.php" style="color: whitesmoke;">LOG OUT</a></li></td></tr>



                </table>
      
      </div>
      
      <div id="right">
      <ul>
    <li> Logged in: 
    <?php

    echo $_SESSION['goldy'];
    ?>
      
      </div>

      <div id="middle" >
      	<h1>Bus Schedule</h1>
   <?php




include_once("config.php");
$sql="select * from bus_schedule order by doj ASC";
// echo "<h3> SQL = ".$sql;


$result=mysql_query($sql,$conn);

	echo "<table border=5 cellpadding=2px align=center bordercolor=green tr:nth-child(even) {background: #CCC}
tr:nth-child(odd) {background: #FFF}>";
	echo "<tr>";
	echo "<th> B no</th>";
	echo "<th> Source </th>";
	echo "<th>  Destination </th>";
	echo "<th>  Date Of Journey </th>";
	echo "<th>  Seats </th>";
	echo "<th>  Price</th>";
	
	echo "<th> Action</th>";
	
	echo "</tr>";
	while( $row=mysql_fetch_array($result))
	{
	echo "<tr>";
	$a=$row['bno'];
	$b=$row['source'];
	$c=$row['destination'];
	$d=$row['doj'];
	$e=$row['seat'];
	$f=$row['price'];
	
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$d."</td>";
	echo "<td>  ".$e."</td>";
	echo "<td>  ".$f."</td>";
	
	echo "<td>  <a href='modify.php?bno=$a'>EDIT</a> </td>";
	echo "</tr>";
	}
	echo "</table>";



?>
  
      </div>
</div>

</body>
</html>