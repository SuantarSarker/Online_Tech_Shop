<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/products/product_data_access.php");
function addPendrive($Brand,$Port_Type,$Buying_Price,$Selling_Price,$Quantity,$image,$Size,$Product_id){
    if($Brand=="" || $Port_Type=="" || $Buying_Price=="" || $Selling_Price=="" || $Quantity=="" || $image=="" || $Size=="" || $Product_id=="" ){

    }
    $pendrive=array("Brand"=>$Brand,"Port_Type"=>$Port_Type,"Buying_Price"=>$Buying_Price,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"image"=>$image,"Size"=>$Size,"Product_id"=>$Product_id);
    return addNewPendrive($pendrive);
}




function loadAllProduct(){
    return getAllProduct();
}



 function searchProduct($invoice){
    return getProductByInvoice($invoice);
}

function getUser($email){
  return getUserInfo($email);
}

function searchPendrive($invoice){
   return getPendrive($invoice);
}
function searchTablet($invoice){
   return getTablet($invoice);
}
function searchMonitor($invoice){
   return getMonitor($invoice);
}
function searchHeadphone($invoice)
{
	return getHeadphone($invoice);
}
function searchLaptop($invoice)
{
	return getLaptop($invoice);
}

function searchDeletePendrive($invoice){
   return getDeletePendrive($invoice);

}
function searchDeleteTablet($invoice){
   return getDeleteTablet($invoice);
}

function searchDeleteLaptop($invoice){
   return getDeleteLaptop($invoice);
}

function searchDeleteHeadphone($invoice){
   return getDeleteHeadphone($invoice);
}

function searchDeleteMonitor($invoice){
   return getDeleteMonitor($invoice);
}

function searchUpdatePendrive($invoice,$q,$sell_Price){
   return getUpdatePendrive($invoice,$q,$sell_Price);
}
function searchUpdateTablet($invoice,$q,$sell_Price){
   return getUpdateTablet($invoice,$q,$sell_Price);
}

function searchUpdateLaptop($invoice,$q,$sell_Price){
   return getUpdateLaptop($invoice,$q,$sell_Price);
}

function searchUpdateMonitor($invoice,$q,$sell_Price){
   return getUpdateMonitor($invoice,$q,$sell_Price);
}

function searchUpdateHeadphone($invoice,$q,$sell_Price){
   return getUpdateHeadphone($invoice,$q,$sell_Price);
}


function addCart($invo,$id,$brand,$sprice,$quantity,$email,$total,$bprice){
    
    $cart=array("invo"=>$invo,"id"=>$id,"brand"=>$brand,"sprice"=>$sprice,"quantity"=>$quantity,"email"=>$email,"total"=>$total,"bprice"=>$bprice);
    return addNewCart($cart);
}

function addWish($invoice,$id,$brand,$sprice,$email){
    
    $wish=array("invoice"=>$invoice,"id"=>$id,"brand"=>$brand,"sprice"=>$sprice,"email"=>$email);
    return addNewWish($wish);
}

 function searchWish($email){
    return getWishByEmail($email);
}


function removeWish($invoice,$email){
    return deleteWish($invoice,$email);
}


function insertItem($invoice,$bprice,$sprice,$quantity,$email,$profit){
     
     $sold=array("invoice"=>$invoice,"bprice"=>$bprice,"sprice"=>$sprice,"quantity"=>$quantity,"email"=>$email,"profit"=>$profit);
       return addSold($sold);
     }

 function searchExist($invoice){
    return getExist($invoice);
}

function updateCart($invoice,$quantity,$price){

     $cart=array("invoice"=>$invoice,"quantity"=>$quantity,"price"=>$price);
     return editCart($cart);    

}


function updatePro($invoice,$quantity){

     $qty=array("invoice"=>$invoice,"quantity"=>$quantity);
     return editPro($qty);    

}

function addCartSold($invoice,$email,$bprice,$Selling_Price,$Quantity,$profit,$Product_id){
    if($invoice=="" || $email=="" || $bprice=="" || $Selling_Price=="" || $Quantity=="" || $profit==""|| $Product_id=="" ){

    }
    $sold=array("invoice"=>$invoice,"email"=>$email,"bprice"=>$bprice,"Selling_Price"=>$Selling_Price,"Quantity"=>$Quantity,"profit"=>$profit,"Product_id"=>$Product_id);
    return addNewSold($sold);
}


function updateSold($invoice,$quantity,$profit){

     $sold=array("invoice"=>$invoice,"quantity"=>$quantity,"profit"=>$profit);
     return editSold($sold);    

}


function deleteCart($email){
    return dCart($email);
}

function loadProfit(){
    return getProfit();
}

function LoadSold(){
    return getSold();
}

?>