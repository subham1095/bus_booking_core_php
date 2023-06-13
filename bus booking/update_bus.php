<?php
session_start();
 if(  isset($_SESSION['goldy']) == "")
{
   //checking if session is blank then page wont travel 
    header("location:index.php");
    exit;
}

include_once("config.php");
$bno=$_GET['bno'];
$sql="select * from bus_schedule where bno=$bno";
 // echo ("$sql");
 // exit();
// echo "<h3> SQL = ".$sql;

$result=mysql_query($sql,$conn);

$edit_info=mysql_fetch_array($result);
if(isset($_REQUEST['submit']))
{
   $username=$_SESSION['goldy']; 
   $email=$_POST['email'];
   $ticket=$_POST['ticket'];
   $bno=$_POST['bno'];
   $source=$_POST['source'];
   $destination=$_POST['destination'];
   $doj=$_POST['doj'];
    $seat=$_POST['seat'];
   $price=$_POST['price'];
   $tot_price=$price*$ticket;


                 $sql="INSERT INTO `bkbus` SET                            
                                  
                                  
                                  `username`='".$username."',
                                  `email`='".$email."',
                                  `ticket`='".$ticket."',
                                  `bno`='".$bno."',
                                  `source`='".$source."',
                                  `destination`='".$destination."',
                                  `doj`='".$doj."',
                                  `seat`='".$seat."',
                                  `price`='".$price."',
                                  `tot_price`='".$tot_price."'
                                  
                                  ";

   
  
            // $query_emp="UPDATE emp SET emp_name='$emp_name',emp_pswd=$emp_pswd
            // ,emp_phone=$emp_phone,emp_email='$emp_email',emp_join_date='$emp_join_date' where emp_id=$emp_id";
   //  echo "$query_emp";
   // exit();

                     
      if(mysql_query($sql,$conn))
              {

                     $query_emp="UPDATE bus_schedule SET seat=seat-$ticket where bno=$bno";

                 mysql_query($query_emp,$conn);
                   echo "<script>alert('Booked Ticket Successfully');
                        window.location = 'booked.php';
                 </script>";
                

                                  
              }
              else
              {
                echo "<script>alert('Failed Booking');</script>";
              }
   
 }

?>


<html>
<head>
<title> Login </title>
<style>
#container  {
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

a:hover {
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

    #rightpart  {
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

#ft {
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
        
        <form   name="form"  method="POST">
<h2>Booking Bus Ticket</h2> 
<div >
		<table cellpadding="5px" border="5px" border-collapse: collapse;>
 
             <tr>
        <td><label >Email</label>
            <input name="email"  id="" value="<?php echo $_SESSION['boldy']; ?>" readonly >
        </td>
    
    
          <td><label >No Of Persons</label>
               <select name="ticket">
                   <option value="1">1</option>
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="4">4</option>
               </select> </td>
          
      </tr>
      
      <tr>
        <td><label >bno</label>
            <input name="bno"  id="" value="<?php echo $edit_info['bno']; ?>" readonly >
        </td>
          <td><label >source</label>
               <input name="source"  id="" value="<?php echo $edit_info['source']; ?>" readonly > </td>
          
      </tr> 

      <tr>
          <td><label >destination Name</label>
            <input name="destination"  id="" value="<?php echo $edit_info['destination']; ?>" readonly >
            </td>
            
          <td><label >Date of journey</label>
            <input name="doj"  id="" value="<?php echo $edit_info['doj']; ?>" readonly >
          </td>
          
      </tr> 

      <tr>
          <td><label > TotalSeat</label>
            <input name="seat"  id="" value="<?php echo $edit_info['seat']; ?>" readonly >
            </td>
            
          <td><label >Price</label>
           <input name="price"  id="" value="<?php echo $edit_info['price']; ?>" readonly >
          </td>
          
      </tr>

      

       


      

        
        </table><br>

  <div >   
<div >
<input class="btn" type="submit" name="submit" value="Confirm Booking">
</div>


</div>
</form>
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