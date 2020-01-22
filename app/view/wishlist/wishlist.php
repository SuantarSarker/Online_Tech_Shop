<?php
session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");





$invoice=$_GET['invoice'];


echo $_SESSION['email'];


$product=searchProduct($invoice);

 $wish=addWish($product['PINVOICE'],$product['PID'],$product['PNAME'],$product['SEEL_PRICE'],$_SESSION['email']);






?>


<html>
<head>
	<title>MY Wish List</title>
</head>
<body>
	 <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  <td><a href="Login.php" alt="My Account">My Account</a></td>
                  <td><a href="wishlist.php?invoice=<?php $product[PINVOICE] ?>" alt="My Wishlist">My Wishlist</a></td>
                  

            </tr>
               </table>
             </td>
            </tr>
               <tr><td>&nbsp</td></tr>
               <tr>
                <td>
                <table align="center">
                  <tr >

                <td><a href="index.php"><h3>Home</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>      
                <td><a href="index.php"><h3>Tablet</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <td><a href="index.php"><h3>Laptops</h3> </a> </td>
                <td>&nbsp &nbsp &nbsp</td>
                <!-- <td><a href="index.php"><h3>Headphones</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td> -->
               
                <td><a href="index.php"><h3>Monitor</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
               
                <td><a href="index.php"><h3>Pendrive</h3></a> </td>
                 </tr> 
                </table>
                </td>
               </tr>
  </table>
	<table width="90%" align="center">
		<tr>
			<td width="20%">
				<table>
					<tr>
						<td>MY ACCOUNT</td>
					</tr>
					<tr>
						<td>
							<a href="account.php" alt="">Account Information</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="wishlist.php" alt="">My Wishlist</a>
						</td>
					</tr>
				</table>
			</td>
			<td>
				 <h3>My wishlist</h3>
				<table border="1px">
					<tr>
						
						<th>PRODUCT DETAILS</th>
						<th></th>
						<th></th>
					</tr>
   
             

          <?php

        
          $wishLoad=searchWish($_SESSION['email']);
                  
          foreach ($wishLoad as $wishList){
          echo "
					<tr>
						
						<td width='45%' align='top'>Product ID: $wishList[PID]<br/>
                                        Product Brand: $wishList[PNAME]<br/>
                                        Product Price: $wishList[S_PRICE]<br/>
                                        
                                        <form method='POST' action='../addCart/Add_To_Cart.php?invoice=$wishList[PINVOICE]'>
                        <td width='20%' align='top'>
                          
                                         <input type='text' name='quantity'></td> 
                                         <td>
                                         <a href='../addCart/Add_To_Cart.php?invoice=$wishList[PINVOICE]'><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a>

                                         </td>
                            

                          
                        </form>
          
					</tr>
          "; }?>

				</table>
			</td>
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