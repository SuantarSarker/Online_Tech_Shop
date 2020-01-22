<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addHeadphone($Brand,$Connectivity,$Buying_Price,$Selling_Price,$Quantity,$image){
    if($Brand=="" ||$Connectivity=="" || $Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image=="" ){

    }
    $laptop=array("Brand"=>$Brand,"Connectivity"=>
    	$Connectivity,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image);
    return addNewHeadphone($headphone);
}


function loadAllHeadphone(){
    return getAllHeadphone();
}


?>