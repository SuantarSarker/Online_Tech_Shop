<?php
session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/monitor_service.php");

    $monitorsList=loadAllMonitor();

    echo $_SESSION['email'];


?>


<!DOCTYPE>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" href="">
</head>
<body>
          <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
                  
                  <td><a href="account.php" alt="My Account">My Account</a></td>
                 <td><a href="logout.php" alt="My Wishlist">Logout</a></td>
                  

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
               <!--  <td><a href="Headphone.php"><h3>Headphones</h3></a> </td>
               <td>&nbsp &nbsp &nbsp</td> -->
               
                <td><a href="Monitors.php"><h3>Monitor</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
               
                <td><a href="Pendrive.php"><h3>Pendrive</h3></a> </td>
                 </tr> 
                </table>
                </td>
               </tr>
               
</table>

<table width=90% align="center" >
  <tr>
                    <td><h2>Collections</h2><hr></hr> </td>
               </tr>

               <tr>
                    <td><h2>Exclusive</h2> </td>
               </tr>
</table>
               
               <div id="container">
                
                                 <?php

                foreach ($monitorsList as $monitor) {

                
                echo 
                "
                <div id='c'>
                <div id='tp'>
                <div id='t'>
                     
                    <p><b>$monitor[MNAME]</b></p>
                    
                    <p><b>$monitor[MID]</b></p>
                     <p>Price: <b>$monitor[S_PRICE]</b></p>
                    </div>
                    <div id='p'>
                    <img src= 'upload/$monitor[PHOTO]' style='width:100%; height: 200px'/> 
                    </div>
                    </div>
                    <div id='b'>
                     <a href='Product_Details.php?invoice=$monitor[MINVOICE]'> <button>Buy</button></a>
      
                     
                    </div>
                    
                </div>
                "; 
            }
                
        ?>
                            
               

                 
               </div>


               <table height=5%>
               <tr><td>
           
               </td></tr>
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