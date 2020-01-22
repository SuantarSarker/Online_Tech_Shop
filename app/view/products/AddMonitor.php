<html>
<head>
	<title>Add Monitor</title>
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
                </table>
                </td> -->
               </tr>
  </table>
<form action="monitor_upload.php"  method="POST"  enctype="multipart/form-data">

		<table width="50%"  align="center">
			
		 
			<tr>
				<td colspan="3"><h2>Monitor Specification :</h2></td>
			</tr>
			<tr>
				<td><label>Brand :</label></td>
				<td>
					<select name="Brand">
					  <option value="Samsung">Samsung</option>
					  <option value="Walton">Walton</option>
					  <option value="Dell">Dell</option>
					  <option value="HP">HP</option>
					  <option value="LG">LG</option>
					  <option value="Lenovo">Lenovo</option>
					 
					 
					 </select>
				</td>
			</tr>
			
		
			
			<tr>
				<td><label>Display Size :</label></td>
				<td>
					<select name="Display_Size">
					  
					   <option value="12.0">12.0"</option>
					  <option value="12.1">12.1"</option>
					  <option value="12.2">12.2"</option>
					  <option value="12.3">12.3"</option>
					  <option value="12.4">12.4"</option>
					  <option value="12.5">12.5"</option>
					  <option value="12.6">12.6"</option>
					  <option value="12.7">12.7"</option>
					  <option value="12.8">12.8"</option>
					  <option value="12.9">12.9"</option>
					  <option value="13.0">13.0"</option>
					  <option value="13.1">13.1"</option>
					  <option value="13.2">13.2"</option>
					  <option value="13.3">13.3"</option>
					  <option value="13.4">13.4"</option>
					  <option value="13.5">13.5"</option>
					  <option value="13.6">13.6"</option>
					  <option value="13.7">13.7"</option>
					  <option value="13.8">13.8"</option>
					  <option value="13.9">13.9"</option>
					  <option value="14.0">14.0"</option>
					  <option value="14.1">14.1"</option>
					  <option value="14.2">14.2"</option>
					  <option value="14.3">14.3"</option>
					  <option value="14.4">14.4"</option>
					  <option value="14.5">14.5"</option>
					  <option value="14.6">14.6"</option>
					  <option value="14.7">14.7"</option>
					  <option value="14.8">14.8"</option>
					  <option value="14.9">14.9"</option>
					  <option value="15.0">15.0"</option>
					  <option value="15.1">15.1"</option>
					  <option value="15.2">15.2"</option>
					  <option value="15.3">15.3"</option>
					  <option value="15.4">15.4"</option>
					  <option value="15.5">15.5"</option>
					  <option value="15.6">15.6"</option>
					  <option value="15.7">15.7"</option>
					  <option value="15.8">15.8"</option>
					  <option value="15.9">15.9"</option>
					  <option value="16.0">16.0"</option>
					  <option value="16.1">16.1"</option>
					  <option value="16.2">16.2"</option>
					  <option value="16.3">16.3"</option>
					  <option value="16.4">16.4"</option>
					  <option value="16.5">16.5"</option>
					  <option value="16.6">16.6"</option>
					  <option value="16.7">16.7"</option>
					  <option value="16.8">16.8"</option>
					  <option value="16.9">16.9"</option>
					  <option value="17.0">17.0"</option>
					   <option value="17.1">17.1"</option>
					  <option value="17.2">17.2"</option>
					  <option value="17.3">17.3"</option>
					  <option value="17.4">17.4"</option>
					  <option value="17.5">17.5"</option>
					  <option value="17.6">17.6"</option>
					  <option value="17.7">17.7"</option>
					  <option value="17.8">17.8"</option>
					  <option value="17.9">17.9"</option>
					  <option value="18.0">18.0"</option>
					   <option value="18.1">18.1"</option>
					  <option value="18.2">18.2"</option>
					  <option value="18.3">18.3"</option>
					  <option value="18.4">18.4"</option>
					  <option value="18.5">18.5"</option>
					  <option value="18.6">18.6"</option>
					  <option value="18.7">18.7"</option>
					  <option value="18.8">18.8"</option>
					  <option value="18.9">18.9"</option>
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Display Resolution :</label></td>
				<td>
					<select name="Processor">
					  
					  <option value="1366x768">1366 x 768</option>
					  <option value="1920x1080">1920 x 1080</option>
					  
					  
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
</form>
</body>
</html>