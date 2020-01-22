<?php
session_start();

if(isset($_SESSION['email']))
{

}
else
{
  header("Location:../customer_info/Login.php");
}
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

    $productList=loadAllProduct();

    
?>


<!DOCTYPE>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" href="">
  <script src="j/main.js"></script>
  <style>
    #product{
      width: 400px;
      padding: 10px;
      display: block;
      border-radius: 3px;
      border: 1px solid silver;
      margin:0 auto;
    }
    /*.result{
      padding: 10px;
      width: 400px;
      margin:0 auto;
     border: 1px solid silver;
    }*/
  </style>

   <script>
            $('documnet').ready(function(){
              $('#product').keyup(function(){
                var name=$(this).val();
                 // alert(name);
                $.post($('form').attr('action'),{'name':name},function(data){
                  $('.result').html(data);
                });
              });
            });
   </script>

   
</head>
<body>
          <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  <td><a href="account.php" alt="My Account">My Account</a></td>
                  <td><a href="logout.php" alt="logout">logout</a></td>
                  
                  

            </tr>
               </table>
             </td>
            </tr>

              <tr><td>  <form method="post" action="service.php" >
             <input type="text" name="product" id="product" placeholder="Search">
          </form>
           <div class="result"></div></td></tr>
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

                foreach ($productList as $product) {

                
                echo 
                "
                <div id='c'>
                <div id='tp'>
                <div id='t'>
                     
                    <p><b>$product[PNAME]</b></p>
                    
                    <p><b>$product[PID]</b></p>
                    <p>Quantity:<b>$product[AVAILABLE_QUANTITY]</b></p>
                    </div>
                    <div id='p'>
                    <img src= 'upload/$product[PHOTO]' style='width:100%; height: 200px'/> 
                    </div>
                    </div>
                    <div id='b'>
                     <a href='Product_Details.php?invoice=$product[PINVOICE]'> <button>Buy</button></a>
      
                     
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