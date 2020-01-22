<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  
                  <td><a href="logout.php" alt="logout">logout</a></td>
                  
                  

            </tr>
               </table>
             </td>
            </tr>
               <tr><td>&nbsp</td></tr>
               <tr>
                <td>
                <table align="center">
                  <tr >

                <td><a href="Home.php"><h3>Home</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>      
                <td><a href="Tablets.php"><h3>Tablet</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <td><a href="Laptop.php"><h3>Laptops</h3> </a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <!-- <td><a href="Headphone.php"><h3>Headphones</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td> -->
               
                <td><a href="Monitors.php"><h3>Monitor</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
               
                <td><a href="Pendrive.php"><h3>Pendrive</h3></a> </td>
                 </tr> 
                </table>
                </td>
               </tr>
               
</table>

</body>
</html>





<?php
session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");
$user=getUser($_SESSION['email']);

echo"
   
		
	<fieldset >
	<legend width='90%' align='center'> <h2>Login</h2></legend>

				<table align='center' height='200' >
				

				<tr>
					<td>Email:</td>
					<td>$user[EMAIL]</td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td>$user[FIRST_NAME]</td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td>$user[LAST_NAME]</td>
				</tr>

     </fieldset>

  ";  
?>