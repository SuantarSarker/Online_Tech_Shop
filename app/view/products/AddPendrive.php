s

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
               <!--  <table align="center">
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
  <form action="upload.php"  method="POST"  enctype="multipart/form-data">  
     <input type="hidden" name="size" value="1000000" >

    <table width="50%"  align="center">
      
     
      <tr>
        <td colspan="3"><h2>Pendrive Specification :</h2></td>
      </tr>
      <tr>
        <td><label>Brand :</label></td>
        <td>
          <select name="Brand">
            <option value="SanDisk">SanDisk</option>
            <option value="Kingston">Kingston</option>
            <option value="Transcend">Transcend</option>
            <option value="HP">HP</option>
            <option value="Sony">Sony</option>
            <option value="Corsair">Corsair</option>
            <option value="Lexar">Lexar</option>
            <option value="Imation">Imation</option>
            <option value="PNY">PNY</option>
            <option value="Apacer">Apacer</option>
            <option value="LaCie">LaCie</option>
            <option value="OEM">OEM</option>
            <option value="Crucial">Crucial</option>
            <option value="TDK">TDK</option>
           
           
           </select>
        </td>
      </tr>
      <tr>
        <td><label>Size:</label></td>
        <td>
          <select name="Size">
            
            <option value="8GB">8GB</option>
            <option value="16GB">16GB</option>
            <option value="32GB">32GB</option>
            <option value="64GB">64GB</option>
            
            
            
           </select>
        </td>
      </tr>
    
      
      
      <tr>
        <td><label>Port Type :</label></td>
        <td>
          <select name="Port_Type">
            
            <option value="USB_Type_C">USB Type-C </option>
            <option value="USB_3.1">USB 3.1</option>
            
            
           </select>
        </td>
      </tr>
      <tr>
        <td><label>Product id</label></td>
        <td>
          <input type="text" name="Product_id">
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
        <td><input type="file" name="file" id="file"></td>
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