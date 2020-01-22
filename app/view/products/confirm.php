<?php

define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/product_service.php");

    $invoice=$_GET['invoice'];
  


    

    $product=searchProduct($invoice);

    $type=$product['PTYPE'];
    $in=$product['PINVOICE'];
    $pendrive=searchDeletePendrive($invoice);
         
         
         
    
    if($type=="pendrives"){
        $pendriveList=searchDeletePendrive($invoice);
        echo "Pendrive Deleted";}


     $monitor=searchDeleteMonitor($invoice);
         
       
         
    if($type=="monitors"){
        $monitorList=searchDeleteMonitor($invoice);
        echo "Monitor Deleted";}

    
    $tablet=searchDeleteTablet($invoice);
         
         
         
    
    if($type=="tablets"){
        $tabletList=searchDeleteTablet($invoice);
        echo "Tablet Deleted";}

    $laptop=searchDeleteLaptop($invoice);
         
        
         
    
    if($type=="laptops"){
        $laptopList=searchDeleteLaptop($invoice);
        echo "Laptop Deleted";}

    $headphone=searchDeleteHeadphone($invoice);
         
       
         
    
    if($type=="headphones"){
        $headphoneList=searchDeleteHeadphone($invoice);
        echo "Headphone Deleted";}
         

header("Location:DeleteProduct.php");


?>