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




#middle   {
      width:40%;
      height:60%;
      font-weight:bold;
      background-color: whitesmoke;
      position: absolute;
      left: 30%;
      top: 30%;
      border-radius: 20px;

    
        
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
    #nn     {
            text-align:center;
            color:#ffffff;
            font-style:verdana;
            font-size:20px;
            font-weight:bold;
        }

        
#kk     {
            text-align:center;
            color:#ffffff;
            font-style:tahoma;
            font-size:30px;
            font-weight:bold;
        }



h2    {
      font-size:35px;
      font-weight:bold;
      font-family:tahoma;
      text-shadow: #FC0 1px 0 10px;
      color: darkgreen;
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

      </br>
            <h2>REPORT/DASHBOARD</h2>

            <?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("atpl",$con);



$sql="select * from bus_schedule";
$result=mysql_query($sql,$con); 
$sum=0;
$count=0;
while($row=mysql_fetch_array($result))
{
    $p=$row['bno'];
    $sum++;
    
}

$sql="select * from bus_schedule";
$result=mysql_query($sql,$con); 
$destination=0;
$count=0;
while($row=mysql_fetch_array($result))
{
    $p=$row['destination'];
    $destination++;
    
}


$sql="select * from bus_schedule";
$result=mysql_query($sql,$con); 
$s=0;
$count=0;
while($row=mysql_fetch_array($result))
{
    $p=$row['seat'];
    $s=$s+$p;
    $count++;
}
$seat=$s;


   

?>

<table width="500" cellspacing="5px" cellpadding="5px" >
    <tr>
    
     </td> 
    <td width=150 height=100 bgcolor="#EA0D2B" style="border-radius: 20px;"> 
     <div id="kk"> <?php echo $sum ?> </div>
    <div id="nn"> Total BUS </div>

    </td>


    </td> 
    <td width=150 height=100 bgcolor="#3595F5" style="border-radius: 20px;"> 
     <div id="kk"> <?php echo $seat ?> </div>
    <div id="nn"> Total Seat </div>

    </td>

    </td> 
    <td width=150 height=100 bgcolor="#40F790 " style="border-radius: 20px;"> 
     <div id="kk"> <?php echo $destination ?> </div>
    <div id="nn"> Total Destination </div>

    </td>
    </tr>

</table>    
</div>

</body>
</html>