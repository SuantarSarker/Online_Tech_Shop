<?php
session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");
//require 'item.php';
$invoice=$_GET['invoice'];
$quantity=$_POST['quantity'];



$result=removeWish($invoice,$_SESSION['email']);


$product=searchProduct($invoice);

$profit=$_POST['quantity']*($product['SEEL_PRICE']-$product['BUY_PRICE']);
$sold=insertItem($_GET['invoice'],$product['BUY_PRICE'],$product['SEEL_PRICE'],$_POST['quantity'],$_SESSION['email'],$_POST['quantity']);

if($sold){ echo "string";}
else{echo "y";}



class Item
{
  var $bprice;
  var $id;
  var $brand;
  var $price;
  var $quantity;
  var $total;
  var $invo;
}
 
 if(isset($_GET['invoice'])){
  $item=new Item();
  $item->invo=$product['PINVOICE'];
  $item->id=$product['PID'];
  $item->brand=$product['PNAME'];
  $item->price=$product['SEEL_PRICE'];
  $item->bprice=$product['BUY_PRICE'];
  $item->quantity=$quantity;

  
  
  $ix=-1;
  
     $cart=unserialize(serialize($_SESSION['cart']));

  for($i=0;$i<count($cart);$i++){
       if($cart[$i]->invo==$_GET['invoice'])
       {
        $ix=$i;
        break;
       }
     }
   if($ix==-1){
         $_SESSION['cart'][]=$item;  
              }
   else
   {
    
    $cart[$ix]->quantity=$item->quantity+$cart[$i]->quantity;
    $_SESSION['cart']=$cart;
   }        


 
 }

   





?>




<!DOCTYPE>
<html>
<head>
	<title>ADD TO CART</title>
</head>
<body>
      
 <table width=90% align="center" >
            <tr>
             <td>
                  <table width="25%" height="40%" align="right" >
            <tr align="right" >
               
                  
                  <td><a href="../products/account.php" alt="Home">My Account</a></td>
                  <td><a href="../products/logout.php" alt="logout">logout</a></td>
                  
                  

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
               
               
                <td><a href="Monitors.php"><h3>Monitor</h3></a> </td>
                <td>&nbsp &nbsp &nbsp</td>
               
                <td><a href="Pendrive.php"><h3>Pendrive</h3></a> </td>
                 </tr> 
                </table>
                </td>
               </tr>
               
</table>
                </td>
               </tr>

               <tr>
                    <td>&nbsp </td>
               </tr>

               <tr>
                    <td><h2>Shopping Cart</h2> </td>
               </tr>

             </table>
  

                

               

               <table border="1px" align="center" width="90%">
               	   <tr>
               	   	   
               	   	   <th>Product ID</th>
               	   	   <th>Product Name</th>
               	   	   <th>Unit Price</th>
               	   	   <th>Quantity</th>
               	   	   <th>Total Price</th>
               	   	   <th width="15%"></th>
               	   </tr>
                   
                    <?php
                           $cart=unserialize(serialize($_SESSION['cart']));
                           $s=0;
                           $ix=0;
                           for($i=0;$i<count($cart);$i++)
                           {
                              $s+=$cart[$i]->quantity*$cart[$i]->price; 
                    ?>
               	   <tr>
               	   	   <td align='center'><?php echo $cart[$i]->id; ?> </td>   
               	   	   <td align='center'><?php echo $cart[$i]->brand; ?></td>
                       <td align='center'><?php echo $cart[$i]->price; ?></td>
               	   	   <td align='center'><?php echo $cart[$i]->quantity; ?></td>
               	   	   <td align='center'><?php echo $cart[$i]->quantity*$cart[$i]->price; ?></td>
                       <!-- <td align='center'><a href="Add_To_Cart.php?ix=<?php $ix; ?> onclick="return confirm('Are you sure')" >Remove</a></td> -->
                   
               	   
               	   	   
               	   	  </tr>
                    <?php $ix++; 
                              $ttl=$cart[$i]->quantity*$cart[$i]->price;
                              $search=searchExist($cart[$i]->invo);
                              $existQty=$search['QUANTITY'];
                              if($search){
                                $update=updateCart($cart[$i]->invo,$cart[$i]->quantity,$ttl);
                                $Qty=$cart[$i]->quantity-$search['QUANTITY'];
                               $updateProduct=updatePro($cart[$i]->invo,$Qty); 

                               $profit=$cart[$i]->quantity*($cart[$i]->price-$product['BUY_PRICE']);
                               
                               $updateSold=updateSold($cart[$i]->invo,$Qty,$profit); 

                              }
                              else{
                                    $result=addCart($cart[$i]->invo,$cart[$i]->id,$cart[$i]->brand,$cart[$i]->price,$cart[$i]->quantity,$_SESSION['email'],$cart[$i]->quantity*$cart[$i]->price,$cart[$i]->bprice);
                                      

                                      $profit=$cart[$i]->quantity*($cart[$i]->price-$product['BUY_PRICE']);


                                    $sold=addCartSold($cart[$i]->invo,$_SESSION['email'],$product['BUY_PRICE'],$cart[$i]->price,$cart[$i]->quantity,$profit,$cart[$i]->id);

                                    $updateProduct=updatePro($cart[$i]->invo,$cart[$i]->quantity);
                              }
                              
                           } ?>
                
                   


               </table>
               
               <table><tr><td>&nbsp</td></tr></table>
                 
               <table width="90%" align="center" ">
               	<tr>
               		<td width="70%"><a href="../products/Home.php"> <button>Continue Shopping</button></a></td>
               		
               	    
               	</tr>
               	
               	<tr>
               		<td>&nbsp</td>
               	</tr>   

               	<tr>
               		<td>&nbsp</td>
               	</tr>  

               	<tr>
               		<td>&nbsp</td>
               	</tr>  

               	<tr>
               		<td align="right"><b>Grand Total:</b></td>
               		<td align="left"><?php echo $s; ?> &nbsp TAKA</td>

               	</tr>  

               	<tr>
               		<td>&nbsp</td>
               	</tr> 

               	<tr>
               		<td>&nbsp</td>
               		<td align="left"><a href="Thanks.php"> <button>Place Order</button></a></td>
               	</tr>




               </table>


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