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
        <div style="float: right;"><h5>Logged :- <u><?php echo $_SESSION['boldy'];   ?></u>&nbsp;&nbsp;</h5></div><br>
	<div id="form">
        
        <form   name="form"  method="POST" action="search2.php">
<h2>EMP Search</h2> 

  
	<table border="5" cellpadding="2px" align="center" bordercolor="#6C3483">
	<tr><td colspan="2">ENTER Employee Id TO SEARCH:</td></tr>
    <tr><td><label >Source</label>
            
            </td>


    	<td><select name="source">
                    <option value="">-- select Source--</option> 
                <?php 

                $conn=mysql_connect("localhost","root","");
                $db=mysql_select_db("atpl",$conn);
                $sql="SELECT distinct source FROM `bus_schedule`  ORDER BY `doj` ASC;";

                $branch_query=mysql_query($sql,$conn);
               

                while ($branch_result=mysql_fetch_array($branch_query)) {
                //  echo $branch_result['b_id'];
                // exit();

                ?>
                    <option value="<?php echo $branch_result['source']; ?>"><?php echo $branch_result['source'];?></option> 

                <?php
                }
                ?>          
                 </select></td></tr>

                 <tr>
                 	<td><label >Destination</label>
            
            </td>


                 	<td><select name="destination">
                    <option value="">-- select Destination--</option> 
                <?php 

                $conn=mysql_connect("localhost","root","");
                $db=mysql_select_db("atpl",$conn);
                $sql="SELECT distinct destination FROM `bus_schedule`  ORDER BY `doj` ASC;";

                $branch_query=mysql_query($sql,$conn);
               

                while ($branch_result=mysql_fetch_array($branch_query)) {
                //  echo $branch_result['b_id'];
                // exit();

                ?>
                    <option value="<?php echo $branch_result['destination']; ?>"><?php echo $branch_result['destination'];?></option> 

                <?php
                }
                ?>          
                 </select></td></tr>

                 <tr>
          <td><label >Date Of Journey</label>
            
            </td>
            <td><input name="doj" type="date"></td>
            
          
          
      </tr>
    <tr ><td colspan="2"><input type="submit" name="save" value="Search" class="btn" ></input></td></tr>

	</table>

  <div >   
<br><br>
<a href="logout_user.php">Logout</a>


</div>
</form>
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