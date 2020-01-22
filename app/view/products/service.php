<?php
$serverName="localhost/orcl";
$username="system";
$password="3839306";
//$databaseName="userdb";
$connection=oci_connect($username,$password,$serverName);
$sql="SELECT pname FROM products WHERE pname LIKE '".$_POST['name']."%'";

$result=oci_parse($connection,$query);
    oci_execute($result);
foreach ($result as $key) {
	
	return $key['pname'];
	
}
?>


<?php


// function executeNonQuery($query){
// global $serverName,$username,$password;
// $result=false;
// $connection=oci_connect($username,$password,$serverName);
// if($connection){
//     $result=oci_parse($connection,$query);
//     oci_execute($result);
// }
// return $result;
// }

// function executeQuery($query){
//     return executeNonQuery($query);
// }
// ?>