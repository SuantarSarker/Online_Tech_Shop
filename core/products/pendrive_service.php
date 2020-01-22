<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addPendrive($Brand,$Port_Type,$Buying_Price,$Selling_Price,$Quantity,$image,$Product_id){
    if($Brand=="" ||$Port_Type=="" || $Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image=="" || $Product_id=="" ){

    }
    $pendrive=array("Brand"=>$Brand,"Port_Type"=>
    	$Port_Type,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image,"Product_id"=>$Product_id);
    return addNewPendrive($Pendrive);
}


function loadAllPendrive(){
    return getAllPendrive();
}


?>