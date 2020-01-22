<?php
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

    $product=loadAllProduct();


?>
<html>
	<head>
		<title>Product History</title>
	</head>
	<body>
		 <table width=55% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  <td><a href="../customer_info/Login.php" alt="My Account">Logout</a></td>
                  
                <table align="left">
                  <tr >

                <td><a href="ManagerHome.php"><h3>Home</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>      
                 </tr> 
                </table>
                </td>
               </tr>
  </table>

    <table width="80%" align="center" border="1">
    	<tr>
    		<th>Date</th>
    		<th>Product Invoice</th>
    		<th>Product Id</th>

    		<th>Buy Price</th>
    		<th>Sell Price</th>
    		<th>Quantity</th>
    	</tr>

    	<?php
    	foreach ($product as $product){
    	    	echo "
    	<tr>
    		 <td > $product[ADD_DATE]</td>
    		<td > $product[PINVOICE]</td>
    		<td>$product[PID]</td>
    		<td> $product[BUY_PRICE]</td>
    		<td> $product[SEEL_PRICE]</td>
    		<td> $product[AVAILABLE_QUANTITY]</td>
    	</tr>

    	";
    	 }
    	?>

   



    </table>
		



		<!-- footer -->
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