<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addLaptop($Name,$Brand,$Generation,$Processor,$Display_Size,$RAM,$ROM,$Buying_Price,$Selling_Price,$Quantity,$image){
    if($Name==""||$Brand=="" || $Generation =="" ||$Processor=="" ||$Display_Size="" ||$RAM=""||$ROM =="" ||$Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image==""  ){

    }
    $laptop=array("Name"=>$Name,"Brand"=>$Brand,"Generation"=>$Generation,"Processor"=>$Processor,"Display_Size"=>
    	$Display_Size,"RAM"=>$RAM,"ROM"=>$ROM,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image);
    return addNewLaptop($laptop);
}


function loadAllLaptop(){
    return getAllLaptop();
}


?>