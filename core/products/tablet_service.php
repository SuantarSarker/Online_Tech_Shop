<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addTablet($Brand,$Processor_Type,$Ram,$Rom,$Processor,$Display_Size,$Buying_Price,$Selling_Price,$Quantity,$image){
    if($Brand=="" || $Processor_Type=="" || $Ram=="" || $Rom=="" || $Processor=="" || $Display_Size=="" || $Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image==""  ){

    }
    $tablet=array("Brand"=>$Brand,"Processor_Type"=>
    	$Processor_Type, "Ram"=>$Ram,"Rom"=>$Rom,"Processor"=>$Processor,"Display_Size"=>$Display_Size,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image);
    return addNewTablet($tablet);
}


function loadAllTablet(){
    return getAllTablet();
}


?>