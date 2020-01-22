<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addMonitor($Brand,$Display_Size,$Processor,$Buying_Price,$Selling_Price,$Quantity,$image){
    if($Brand=="" ||$Display_Size=="" || $Processor=="" || $Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image==""  ){

    }
    $monitor=array("Brand"=>$Brand,"Display_Size"=>
    	$Display_Size,"Processor"=>$Processor,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image);
    return addNewMonitor($monitor);
}


function loadAllMonitor(){
    return getAllMonitor();
}


?>