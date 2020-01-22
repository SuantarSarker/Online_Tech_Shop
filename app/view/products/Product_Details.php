

  <html>

<head>
    <title>Specification</title>
</head>

<body>
  <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                 
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

        <tr>
            <td><hr> </td>
        </tr>

    </table>

</body>
</html>


<?php

define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

   $invoice=$_GET['invoice'];
  
    $product=searchProduct($invoice);

    $type=$product['PTYPE'];
    $in=$product['PINVOICE'];
    

    $pendrive=searchPendrive($invoice);
         
         $id=$pendrive['PEID'];

   $laptop=searchLaptop($invoice);       
     $lid=$laptop['LID'];
   
    $monitor=searchMonitor($invoice);       
     $mid=$monitor['MID'];

    $tablet=searchTablet($invoice);       
     $tid=$tablet['TID'];

      $headphone=searchHeadphone($invoice);       
     $hid=$headphone['HID'];
         
         
    
    if($type=="PENDRIVES"){
        $pendrive=searchPendrive($invoice);
       


      
      echo "
                <table align='center' width='20%'>


                                <tr>
                                    <td colspan='2'>
                                        <div>
                                       <img src= 'upload/$pendrive[PHOTO]' style='width:100%; height: 200px'/>
                                      
                                        </div>
                                    </td>

                                    
                                </tr>

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                                

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                            </table>

                             <table align='center'>

                                

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>


                                <tr>
                                <form  method='POST' action='../addCart/Add_To_Cart.php?invoice=$pendrive[PEINVOICE]'>
                                <table align='center'>
                                <tr>
                                <td>
                                  Quantity
                               </td>
                               <td align='center'>
                                  <input type='text' name='quantity' id='quantity' required/>
                               </td>

                                </tr>
                                 <tr>
                                    <td><a href='../addCart/Add_To_Cart.php?invoice=$pendrive[PEINVOICE]'><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a></td>

                                    <td>
                                    
                                        &nbsp
                                    </td>

                                    <td><a href='../wishlist/wishlist.php?invoice=$pendrive[PEINVOICE]'><button type='button' name='wishlist' value='wishlist' >Add To Wishlist</button></a></td>

                                </tr>
                                </table>
                                </form>
                                </tr>

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                            <table width=90% align='center' >
                            <tr>
                            <td>
                            <hr>

                            </td>

                            </tr>

                            </table>

                            
                                

                            </table>

                            <table border='1' align='center' width='700'>

                            


                            <tr>
                            <td colspan='3' align='center'>
                                <h2>Specification</h2>
                                </td>
                            </tr>
                    

                    <tr>
                        <td align='left'>Brand</td>
                        <td align='left'>$pendrive[BRAND]</td>
                    </tr>
                    <tr>
                        <td align='left'>Size</td>
                        <td align='left'>$pendrive[S_SIZE]</td>
                    </tr>
                    <tr>
                        <td align='left'>Port Type</td>
                        <td align='left'>$pendrive[PORT_TYPE]</td>
                    </tr>
                    <tr>
                        <td align='left'>Price</td>
                        <td align='left'>$pendrive[S_PRICE]&nbsp<label>TAKA</label</td>
                    </tr>
                    
                </table>




   ";
}

   elseif($type=="Laptop"){
        $laptop=searchLaptop($invoice);
         
      
      echo "
                <table align='center' width='20%'>


                                <tr>
                                    <td colspan='2'>
                                        <div>
                                       <img src= 'upload/$laptop[PHOTO]' style='width:100%; height: 200px'/>
                                      
                                        </div>
                                    </td>
                                    
                                </tr>

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                                

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                            </table>

                             <table align='center'>                               

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                                <tr>
                                <form  method='POST' action='../addCart/Add_To_Cart.php?invoice=$laptop[LINVOICE]'>
                                <table align='center'>
                                <tr>
                                <td>
                                  Quantity
                               </td>
                               <td align='center'>
                                  <input type='text' name='quantity' id='quantity' required/>
                               </td>

                                </tr>
                                 <tr>
                                    <td><a href='../addCart/Add_To_Cart.php?invoice=$laptop[LINVOICE]''><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a></td>

                                    <td>
                                        &nbsp
                                    </td>

                                    <td><a href='../wishlist/wishlist.php?invoice=$pendrive[PEINVOICE]'><button type='button' name='addCart' value='addCart' >Add To Wishlist</button></a></td>

                                </tr>
                                </table>
                                </form>
                                </tr>

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                            <table width=90% align='center' >
                            <tr>
                            <td>
                            <hr>

                            </td>

                            </tr>

                            </table>
                                                          
                            </table>

                            <table border='1' align='center' width='700'>
                           
                            <tr>
                            <td colspan='3' align='center'>
                                <h2>Specification</h2>
                                </td>
                            </tr>
                    <tr>
                        <td align='left'>Name</td>
                        <td align='left'>$laptop[LNAME]</td>
                    </tr>
                    <tr>
                        <td align='left'>Brand</td>
                        <td align='left'>$laptop[LBRAND]</td>
                    </tr>
                    <tr>
                        <td align='left'>Genaratin</td>
                        <td align='left'>$laptop[GENERATION]</td>
                    </tr>
                    <tr>
                        <td align='left'>Processor</td>
                        <td align='left'>$laptop[PROCESSOR]</td>
                    </tr>
                    <tr>
                        <td align='left'>Display Size</td>
                        <td align='left'>$laptop[D_SIZE]</td>
                    </tr>

                    <tr>
                        <td align='left'>RAM</td>
                        <td align='left'>$laptop[RAM]</td>
                    </tr>
                    <tr>
                        <td align='left'>Storage</td>
                        <td align='left'>$laptop[ROM]</td>
                    </tr>

                    <tr>
                        <td align='left'>Graphics</td>
                        <td align='left'>$laptop[GRAPHICS]</td>
                    </tr>


                    <tr>
                        <td align='left'>Seeling Price</td>
                        <td align='left'>$laptop[S_PRICE]&nbsp<label>TAKA</label</td>
                    </tr>
                    
                </table>
   ";
}

elseif($type=="tablet"){
        $tablet=searchTablet($invoice);
         
      
      echo "
                <table align='center' width='20%'>


                                <tr>
                                    <td colspan='2'>
                                        <div>
                                       <img src= 'upload/$tablet[PHOTO]' style='width:100%; height: 200px'/>
                                      
                                        </div>
                                    </td>
                                    
                                </tr>

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                                

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                            </table>

                             <table align='center'>                               

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                                <tr>
                                <form  method='POST' action='../addCart/Add_To_Cart.php?invoice=$tablet[TINVOICE]'>
                                <table align='center'>
                                <tr>
                                <td>
                                  Quantity
                               </td>
                               <td align='center'>
                                  <input type='text' name='quantity' id='quantity' required/>
                               </td>

                                </tr>
                                 <tr>
                                    <td><a href='../addCart/Add_To_Cart.php?invoice=$tablet[TINVOICE]''><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a></td>

                                    <td>
                                        &nbsp
                                    </td>

                                    <td><a href='../wishlist/wishlist.php?invoice=$pendrive[PEINVOICE]'><button type='button' name='addCart' value='addCart' >Add To Wishlist</button></a></td>

                                </tr>
                                </table>
                                </form>
                                </tr>

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                            <table width=90% align='center' >
                            <tr>
                            <td>
                            <hr>

                            </td>

                            </tr>

                            </table>
                                                          
                            </table>

                            <table border='1' align='center' width='700'>
                           
                            <tr>
                            <td colspan='3' align='center'>
                                <h2>Specification</h2>
                                </td>
                            </tr>
                    
                    <tr>
                        <td align='left'>Name</td>
                        <td align='left'>$tablet[TNAME]</td>
                    </tr>

                    <tr>
                        <td align='left'>Brand</td>
                        <td align='left'>$tablet[BRAND]</td>
                    </tr>

                     <tr>
                        <td align='left'>Processor Type</td>
                        <td align='left'>$tablet[PROCESSOR_TYPE]</td>
                    </tr>

                     <tr>
                        <td align='left'>Processor </td>
                        <td align='left'>$tablet[PROCESSOR]</td>
                    </tr>

                    <tr>
                        <td align='left'>Display Size</td>
                        <td align='left'>$tablet[D_SIZE]</td>
                    </tr>
                    <tr>
                        <td align='left'>RAM</td>
                        <td align='left'>$tablet[RAM]</td>
                    </tr>
                  <tr>
                        <td align='left'>Internal Storage</td>
                        <td align='left'>$tablet[ROM]</td>
                    </tr>
                    <tr>
                        <td align='left'>Price</td>
                        <td align='left'>$tablet[S_PRICE]&nbsp<label>TAKA</label</td>
                    </tr>
                    
                </table>
   ";
}

elseif($type=="monitor"){
        $monitor=searchMonitor($invoice);
         
      
      echo "
                <table align='center' width='20%'>


                                <tr>
                                    <td colspan='2'>
                                        <div>
                                       <img src= 'upload/$monitor[PHOTO]' style='width:100%; height: 200px'/>
                                      
                                        </div>
                                    </td>
                                    
                                </tr>

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                                

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                            </table>

                             <table align='center'>                               

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                                <tr>
                                <form  method='POST' action='../addCart/Add_To_Cart.php?invoice=$monitor[MINVOICE]'>
                                <table align='center'>
                                <tr>
                                <td>
                                  Quantity
                               </td>
                               <td align='center'>
                                  <input type='text' name='quantity' id='quantity' required/>
                               </td>

                                </tr>
                                 <tr>
                                    <td><a href='../addCart/Add_To_Cart.php?invoice=$monitor[MINVOICE]''><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a></td>

                                    <td>
                                        &nbsp
                                    </td>

                                    <td><a href='../wishlist/wishlist.php?invoice=$pendrive[PEINVOICE]'><button type='button' name='addCart' value='addCart' >Add To Wishlist</button></a></td>

                                </tr>
                                </table>
                                </form>
                                </tr>

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                            <table width=90% align='center' >
                            <tr>
                            <td>
                            <hr>

                            </td>

                            </tr>

                            </table>
                                                          
                            </table>

                            <table border='1' align='center' width='700'>
                           
                            <tr>
                            <td colspan='3' align='center'>
                                <h2>Specification</h2>
                                </td>
                            </tr>
                    
                    <tr>
                        <td align='left'>Name</td>
                        <td align='left'>$monitor[MNAME]</td>
                    </tr>

                    <tr>
                        <td align='left'>Brand</td>
                        <td align='left'>$monitor[MBRAND]</td>
                    </tr>

                    <tr>
                        <td align='left'>Display Size</td>
                        <td align='left'>$monitor[D_SIZE]</td>
                    </tr>
                    <tr>
                        <td align='left'>Display Resolution</td>
                        <td align='left'>$monitor[D_RESOLUTION]</td>
                    </tr>

                    <tr>
                        <td align='left'>Price</td>
                        <td align='left'>$monitor[S_PRICE]&nbsp<label>TAKA</label</td>
                    </tr>
                    
                </table>
   ";
}

 elseif($type=="headphone"){
        $headphone=searchHeadphone($invoice);
         
      
      echo "
                <table align='center' width='20%'>


                                <tr>
                                    <td colspan='2'>
                                        <div>
                                       <img src= 'upload/$headphone[PHOTO]' style='width:100%; height: 200px'/>
                                      
                                        </div>
                                    </td>
                                    
                                </tr>

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                                

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                            </table>

                             <table align='center'>                               

                                <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>

                                <tr>
                                <form  method='POST' action='../addCart/Add_To_Cart.php?invoice=$headphone[HINVOICE]'>
                                <table align='center'>
                                <tr>
                                <td>
                                  Quantity
                               </td>
                               <td align='center'>
                                  <input type='text' name='quantity' id='quantity' required/>
                               </td>

                                </tr>
                                 <tr>
                                    <td><a href='../addCart/Add_To_Cart.php?invoice=$headphone[HINVOICE]''><button type='submit' name='addCart' value='addCart' >Add To Cart</button></a></td>

                                    <td>
                                        &nbsp
                                    </td>

                                    <td><a href='wishlist.php'><button type='button' name='addCart' value='addCart' >Add To Wishlist</button></a></td>

                                </tr>
                                </table>
                                </form>
                                </tr>

                            <tr>
                               <td>
                                  &nbsp
                               </td>
                            </tr>
                            <table width=90% align='center' >
                            <tr>
                            <td>
                            <hr>

                            </td>

                            </tr>

                            </table>
                                                          
                            </table>

                            <table border='1' align='center' width='700'>
                           
                            <tr>
                            <td colspan='3' align='center'>
                                <h2>Specification</h2>
                                </td>
                            </tr>
                    
                    <tr>
                        <td align='left'>Brand</td>
                        <td align='left'>$headphone[BRAND]</td>
                    </tr>
                    <tr>
                        <td align='left'>CONNECTIVITY</td>
                        <td align='left'>$headphone[CONNECTIVITY]</td>
                    </tr>
                    <tr>
                        <td align='left'>Price</td>
                        <td align='left'>$headphone[S_PRICE]&nbsp<label>TAKA</label</td>
                    </tr>
                    
                </table>
   ";
}

else
{
    echo "No data is available";
}

?>



<!--Header Start-->


        

<!-- < <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

      <td>
                <table width=90% align="center">
                    <hr>
                    <tr>
                        <td>&nbsp</td>
                    </tr>

                    <tr>
                        <td>
                            <table align="center">
                                <tr>
                                    <td>
                                        <div id='p'>
                                       <img src= '' style='width:100%; height: 200px'/> 
                                        </div>
                                    </td>
                                    <td>&nbsp &nbsp &nbsp</td>
                                    <td>
                                        <image src="images/i2.jpg" alt="macbook pro" align="center" width="300"height="300">
                                    </td>
                                </tr>
                            </table>
                        <td>
                    </tr>
Product Image End-->
<!--Add button Start-->
                    <!-- <tr>
                        <td>
                            <table width="20%"  align="center">
                                <tr align="center">
                                    <td><a href="Add_To_Cart.php"><button type="button" name="addCart" value="addCart" >Add To Cart</button></a></td>
                                    <td><a href="wishlist.php"><button type="button" name="addCart" value="addCart" >Add To Wishlist</button></a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
Add button End-->
        <!-- <tr>
            <td>&nbsp </td>
        </tr>
        <tr>
            <td>
                <hr>
            </td>
        </tr>
<!-Rating Start-->
       <!--  <tr>
            <td>
                <table width="25%" height="40%" align="left">
                    <lebel>
                        <h4>Give Rating</h4>
                    </lebel>
                    <tr align="left">
                        <td><input type="radio" name="Rating" />1 Star</td>
                        <td><input type="radio" name="Rating" />2 Star</td>
                        <td><input type="radio" name="Rating" />3 Star</td>
                        <td><input type="radio" name="Rating" />4 Star</td>
                        <td><input type="radio" name="Rating" />5 Star</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp &nbsp
            </td>
        </tr>
<!-Rating End-->
<!--Specification Start-->
       <!--  <tr>
            <td>
                <table border="1" align="left" width="500">
                    <lebel>
                        <h2>Specification</h2>
                    </lebel>

                    <tr>
                        <td align="left">Brand</td>
                        <td align="left">Apple</td>
                    </tr>
                    <tr>
                        <td align="left">Processor</td>
                        <td align="left">Dual Core Intel Core i5</td>
                    </tr>
                    <tr>
                        <td align="left">Generation</td>
                        <td align="left">5th</td>
                    </tr>
                    <tr>
                        <td align="left">Display Size</td>
                        <td align="left">13.3"</td>
                    </tr>
                    <tr>
                        <td align="left">RAM</td>
                        <td align="left"> 8GB</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    </tr>
<!-Specification End-->
<!--Footer Start-->
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 

            <table > 
                <hr width="1350">
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
                                            <td width="10%"><a href="https://www.facebook.com/"><img width="50%"
                                                        src="images/facebook.jpg"></a></td>
                                            <td width="10%"><a href="https://plus.google.com/+googleplus"><img
                                                        width=50%" src="images/google.jpg"></a></td>
                                            <td width="10%"><a href="https://www.instagram.com/"><img width="50%"
                                                        src="images/instagram.jpg"></a></td>
                                            <td width="10%"><a href="https://bd.linkedin.com/"><img width="50%"
                                                        src="images/linkedin.jpg"></a></td>
                                            <td width="10%"><a href="https://twitter.com/"><img width="50%"
                                                        src="images/twitter.jpg"></a></td>
                                            <td width="10%"><a href="https://www.youtube.com/"><img width="50%"
                                                        src="images/youtube.jpg"></a></td>
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
     
<!--Footer End-->
