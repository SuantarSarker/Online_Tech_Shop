<?php
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");
session_start();


$delete=deleteCart($_SESSION['email']);




?>


<!DOCTYPE >
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
               
                  <td><a href="../products/account.php" alt="My Account">My Account</a></td>
                   <td><a href="../products/logout.php" alt="logout">logout</a></td>
                 
                  

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

           <table width="90%"  align="center">

           	<tr>
           		<td>
           			   <h3>Thank you! your order has been received.</h2><br/>
                  
              

           		</td>

           	</tr>
           	
           </table>


             <table>
               <tr>
                    <td>&nbsp</td>
               </tr>

               <tr>
                    <td>&nbsp</td>
               </tr>
          </table>

          <table align="center">
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