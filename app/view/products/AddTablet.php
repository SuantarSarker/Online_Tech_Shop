<html>
<head>
	<title>Add Tablet</title>
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
	<form action="tablet_upload.php"  method="POST"  enctype="multipart/form-data">

		<table width="50%"  align="center">
			
		 
			<tr>
				<td colspan="3"><h2>Tablet Specification :</h2></td>
			</tr>
			<tr>
				<td><label>Brand :</label></td>
				<td>
					<select name="Brand">
					  <option value="Samsung">Samsung</option>
					  <option value="Walton">Walton</option>
					  <option value="Huawei">Huawei</option>
					 
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Processor Type:</label></td>
				<td>
					<select name="Processor_Type">
					  
					  <option value="Cortex_A57">Cortex-A57</option>
					  <option value="Cortex_A72">Cortex-A72</option>
					  <option value="AMD_A6_1450">AMD A6-1450</option>
					  <option value="Intel_Atom_x5_Series">Intel Atom x5 Series</option>
					  <option value="Intel_Core_i3_5005U">Intel Core i3-5005U</option>
					  <option value="Intel_Core_i3_6100U">Intel Core i3-6100U</option>
					  <option value="Intel_Core_i5_5200U">Intel Core i5-5200U</option>
					  <option value="Intel_Core_i5_6200U">Intel Core i5-6200U</option>
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>RAM :</label></td>
				<td>
					<select name="RAM">
					  <option value="1GB">1GB</option>
					  <option value="2GB">2GB</option>
					  <option value="4GB">4gb</option>
					  <option value="8GB">8GB</option>
					  
					  
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Internal Memory:</label></td>
				<td>
					<select name="Internal_Memory">
					  <option value="2GB">2GB</option>
					  <option value="4GB">4GB</option>
					  <option value="8GB">8GB</option>
					  <option value="16GB">16GB</option>
					  <option value="32GB">32GB</option>
					  <option value="64GB">64GB</option>
					  <option value="128GB">128GB</option>
					  
					  
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Processor :</label></td>
				<td>
					<select name="Processor">
					  
					  <option value="AMD_Sempron_2GB">AMD Sempron 2GB</option>
					  <option value="AMD_Sempron_3GB">AMD Sempron 3GB</option>
					  <option value="AMD_Sempron_4GB">AMD Sempron 4gb</option>
					  <option value="Intel_Core_i3">Intel Core i3</option>
					  <option value="Intel_Core_i5">Intel Core i5</option>
					  <option value="Intel_Core_i7">Intel Core i7</option>
					  <option value="Intel_Core_i9">Intel Core i9</option>
					  
					  
					 </select>
				</td>
			</tr>
			<tr>
				<td><label>Display Size :</label></td>
				<td>
					<select name="Display_Size">
					  
					  <option value="7.0">7.0"</option>
					  <option value="7.1">7.1"</option>
					  <option value="7.2">7.2"</option>
					  <option value="7.3">7.3"</option>
					  <option value="7.4">7.4"</option>
					  <option value="7.5">7.5"</option>
					  <option value="7.6">7.6"</option>
					  <option value="7.7">7.7"</option>
					  <option value="7.8">7.8"</option>
					  <option value="7.9">7.9"</option>
					  <option value="8.0">8.0"</option>
					  <option value=8.1">8.1"</option>
					  <option value="8.2">8.2"</option>
					  <option value="8.3">8.3"</option>
					  <option value="8.4">8.4"</option>
					  <option value="8.5">8.5"</option>
					  <option value="8.6">8.6"</option>
					  <option value="8.7">8.7"</option>
					  <option value="8.8">8.8"</option>
					  <option value="8.9">8.9"</option>
					  <option value="9.0">9.0"</option>
					  <option value="9.1">9.1"</option>
					  <option value="9.2">9.2"</option>
					  <option value="9.3">9.3"</option>
					  <option value="9.4">9.4"</option>
					  <option value="9.5">9.5"</option>
					  <option value="9.6">9.6"</option>
					  <option value="9.7">9.7"</option>
					  <option value="9.8">9.8"</option>
					  <option value="9.9">9.9"</option>
					  <option value="10.0">10.0"</option>
					  
					  
					 
					  
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