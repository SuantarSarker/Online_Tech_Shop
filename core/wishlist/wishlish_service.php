<?php

include_once (PROJECT_ROOT_PATH ."/../../../data/wishlist/wishlist_data.php");
function addWish($invoice,$id,$brand,$sprice,$email){
    
    $wish=array("invoice"=>$invoice,"id"=>$id,"brand"=>$brand,"sprice"=>$sprice,"email"=>$email);
    return addNewWish($wish);
}
?>