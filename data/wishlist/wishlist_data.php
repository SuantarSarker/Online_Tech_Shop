<?php
include_once (PROJECT_ROOT_PATH ."/../../../lib/db.php");
function addNewWish($wish){
	// $target = "pendrives/".photo;

    $query="INSERT INTO wishlist(
      PINVOICE,pid,pname,sprice,email) VALUES('$wish[invoice]','$wish[id]','$wish[brand]','$wish[sprice]','$wish[email]')";
   
   
  	
     return executeNonQuery($query);
}


?>