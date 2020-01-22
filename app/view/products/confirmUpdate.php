<?php

define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

    $invoice=$_GET['invoice'];
  	$q=$_POST['quantity'];
  	$sell_Price=$_POST['sell_Price'];


    

    $product=searchProduct($invoice);


    $type=$product['PTYPE'];
    $in=$product['PINVOICE'];
     $quantity=$product['QUANTITY'];
     // $nquantity=$q+$quantity;
    $pendrive=searchUpdatePendrive($invoice,$q,$sell_Price);
         
        
         
    
    if($type=="pendrives"){
        $pendriveList=searchUpdatePendrive($invoice,$q,$sell_Price);
        echo "Pendrive Updated";}


         
        $monitor=searchUpdateMonitor($invoice,$q,$sell_Price);
         
         
         
    
    if($type=="monitors"){
        $monitorList=searchUpdateMonitor($invoice,$q,$sell_Price);
        echo "Monitor Updated";}

    $tablet=searchUpdateTablet($invoice,$q,$sell_Price);
         
       
         
    
    if($type=="tablets"){
        $tabletList=searchUpdateTablet($invoice,$q,$sell_Price);
        echo "Tablet Updated";}


    $laptop=searchUpdateLaptop($invoice,$q,$sell_Price);
         
         
         
    
    if($type=="laptops"){
        $laptopList=searchUpdateLaptop($invoice,$q,$sell_Price);
        echo "Laptop Updated";}


    $headphone=searchUpdateHeadphone($invoice,$q,$sell_Price);
         
        
         
    
    if($type=="headphones"){
        $headphoneList=searchUpdateHeadphone($invoice,$q,$sell_Price);
        echo "Headphone Updated";}
header("Location:UpdateProduct.php");

?>