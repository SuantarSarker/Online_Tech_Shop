<?php
session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

    $profit=loadProfit();

?>
<html>
	<head>
		<title>Profit Information</title>
	</head>
	<body>
		 <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  <td><a href="../products/logout.php" alt="My Account">Logout</a></td>
                  

            </tr>
               </table>
             </td>
            </tr>
               <tr><td>&nbsp</td></tr>
               <tr>
                <td>
                <table align="center">
                 
                </table>
                </td>
               </tr>
  </table>

					<table width="60%" align="center"  border="1">
						<tr>
							<th width="45%">Date</th>
							<th width="45%">Profit</th>
						</tr>
						<tr>

                                 <?php

                foreach ($profit as $pr) {

                echo 
                "     
                  
                    <td><b>$pr[S_DATE]</b></td>
                    
                    <td><b>$pr[PROFIT]</b> TAKA</td>
              
                "; 
            }
                
        ?>
							
						</tr>
					</table>

 		 
		<br>
		<br>



		<table>
			<tr>
				<td width="50%">
					 <table>
		 	           <tr>
		 	             	<td width="20%" align="center">
		 			            <table>
		 				            <tr align="center">
		 				            	<td> <b>JWSN Computers</b></td>
		 				            </tr>
		 				            <tr align="center">
		 				            	<td>Kuril,Kuratoli</td>
		 				            </tr>
		 				            <tr align="center">
		 				            	<td>Dhaka-1400,Bangladesh.</td>
		 				            </tr>
		 				            <tr align="center">
		 				            	<td>Tel +8801755660000</td>
		 				            </tr>
		 			            </table>
		 		            </td>
		 	            </tr>
		 	            <tr>            
		 	            	<td width="50%" align="center">
		 	            		<table width="70%">
		 	            			 <tr>
                                        <td width="10%"><a href="https://www.facebook.com/"><img width="50%" src="../images/facebook.jpg"></a></td>
                                        <td width="10%"><a href="https://plus.google.com/+googleplus"><img width=50%" src="../images/google.jpg"></a></td>
                                        <td width="10%"><a href="https://www.instagram.com/"><img width="50%" src="../images/instagram.jpg"></a></td>
                                        <td width="10%"><a href="https://bd.linkedin.com/"><img width="50%" src="../images/linkedin.jpg"></a></td>
                                        <td width="10%"><a href="https://twitter.com/"><img width="50%" src="../images/twitter.jpg"></a></td>
                                        <td width="10%"><a href="https://www.youtube.com/"><img width="50%" src="../images/youtube.jpg"></a></td>
                                    </tr>
		 	            		</table>
		 	            	</td>
		 	            </tr>
		           </table>
				</td>
				<td>
					<table width="80%" align="left">
						<tr>
							<td width="30%" align="center"><a href="">About us</a></td>
							<td width="30%" align="center"><a href="">Terms and Conditions</a></td>
							<td width="30%" align="center"><a href="">Privacy Policy</a></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>