<?php
session_start();
 if(  isset($_SESSION['goldy']) == "")
{
   //checking if session is blank then page wont travel 
    header("location:index_form.php");
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

   $bno=$_POST['bno'];
   $source=$_POST['source'];
   $destination=$_POST['destination'];
   $doj=$_POST['doj'];
   $seat=$_POST['seat'];
   $price=$_POST['price'];
   



   
  
            $sql="UPDATE bus_schedule SET bno=$bno,source='$source' ,destination='$destination',doj='$doj',seat=$seat,price=$price WHERE bno=$bno";
   //  echo "$query_emp";
   // exit();
                     
       $result=mysql_query($sql,$conn);  
      if($result)
              {
                   echo "<script>alert('BUS Update Successfully');
                
                 window.location = 'addbusadmin2.php';</script>";
              }
              else
              {
                echo "<script>alert('BUS Updated Unsuccessful');</script>";
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




#middle   {
      width:40%;
      height:65%;
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

      <div id="middle">
<form   name="f1"  method="POST" action="">
<h2>Update Bus</h2> 

    <table cellpadding="5px" style="border-collapse: collapse;">
      
      <tr>
        
          <td><label >Bus No</label>
                
                   
                 
        </td>
       <td> <input name="bno" value="<?php echo $edit_info['bno']; ?>" readonly ></td>
          
      </tr> 

      <tr>
          <td><label >Source No</label>
            
            </td>
            <td><input name="source" value="<?php echo $edit_info['source']; ?>" readonly></td>
            
          
          
      </tr> 
      <tr>
        <td><label >Destination</label>
           
            
          </td>
          <td> <input name="destination" value="<?php echo $edit_info['destination']; ?>" readonly></td>
      </tr>

      <tr>
          <td><label >Date Of Journey</label>
            
            </td>
            <td><input name="doj" type="date" value="<?php echo $edit_info['doj']; ?>" readonly></td>
            
          
          
      </tr>
      <tr>
        <td><label >Seat</label>

            
          </td>
          <td><input name="seat" value="<?php echo $edit_info['seat']; ?>" ></td>

      </tr>
      <tr>
          <td><label >Price</label>
          
          <td>
            <input name="price"  value="<?php echo $edit_info['price']; ?>" ></td>
          </td>
      </tr>   
        </table><br>
    
     <div >
<input class="btn" type="submit"  value="Update" name="submit" onClick="chkForm()">
</div><br>
<!-- </td>
</tr>
</table> -->
</form>
  
      </div>
</div>

</body>
</html>