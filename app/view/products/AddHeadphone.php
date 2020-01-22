<html>
<head>
	<title>Add Pendrive</title>
</head>
<body>
	<table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  <td><a href="logout.php" alt="My Account">Logout</a></td>
                  

            </tr>
               </table>
             </td>
            </tr>
               <tr><td>&nbsp</td></tr>
               <tr>
                <td>
                <!-- <table align="center">
                  <tr >
                
                <td><a href="ManagerHome.php"><h3>Home</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>      
                <td><a href="ManagerHome.php"><h3>Tablet</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <td><a href="ManagerHome.php"><h3>Laptops</h3> </a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <td><a href="ManagerHome.php"><h3>Headphones</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                               
                <td><a href="ManagerHome.php"><h3>Monitor</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                               
                <td><a href="ManagerHome.php"><h3>Pendrive</h3></a> </td>
                 </tr> 
                </table> -->
                </td>
               </tr>
  </table>
	<form action="headphone_upload.php"  method="POST"  enctype="multipart/form-data">

		<table width="50%"  align="center">
			
		 
			<tr>
				<td colspan="3"><h2>Pendrive Specification :</h2></td>
			</tr>
			<tr>
				<td><label>Brand :</label></td>
				<td>
					<select name="Brand">
					  <option value="Micropack">Micropack</option>
					  <option value="Havit">Havit</option>
					  <option value="A4_Tech">A4 Tech</option>
					  <option value="Logitech">Logitech</option>
					  <option value="REMAX">REMAX</option>
					  <option value="Creative">Creative</option>
					  <option value="Edifier">Edifier</option>
					  <option value="JBL">JBL</option>
					 
					 
					 </select>
				</td>
			</tr>
			
		
			
			
			<tr>
				<td><label>Connectivity  :</label></td>
				<td>
					<select name="Connectivity">
					  
					  <option value="Wired">Wired</option>
					  <option value="Bluetooth">Bluetooth</option>
					  
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Buying price :</label></td>
				<td>
					<input type="text" name="Buying_Price" required><label>Taka</label>
				</td>
			</tr>
			<tr>
				<td><label>Selling price :</label></td>
				<td>
					<input type="text" name="Selling_Price" required><label>Taka</label>
				</td>
			</tr>
			<tr>
				<td><label>Quantity:</label></td>
				<td>
					<input type="text" name="Quantity" required>
				</td>
			</tr>
			<tr>
				<td>
					<label><p>Picture of product</p></label>
	                   
				</td>
				<td><input type="file" name="file" ></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
			<tr>
				<td  colspan="2" align="center">
					<input type="submit" name="AddProduct" value="Add Product">
				</td>
			</tr>
		</form>	
		</table>
		
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
		 	            				<td width="10%"><a href="https://www.facebook.com/"><img width="50%" src="images/facebook.jpg"></a></td>
		 	            		     	<td width="10%"><a href="https://plus.google.com/+googleplus"><img width=50%" src="images/google.jpg"></a></td>
		 	            				<td width="10%"><a href="https://www.instagram.com/"><img width="50%" src="images/instagram.jpg"></a></td>
		 	            				<td width="10%"><a href="https://bd.linkedin.com/"><img width="50%" src="images/linkedin.jpg"></a></td>
		 	            				<td width="10%"><a href="https://twitter.com/"><img width="50%" src="images/twitter.jpg"></a></td>
		 	            				<td width="10%"><a href="https://www.youtube.com/"><img width="50%" src="images/youtube.jpg"></a></td>
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