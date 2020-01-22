<?php
$serverName="localhost/orcl";
$username="system";
$password="3839306";
//$databaseName="userdb";

function executeNonQuery($query){
global $serverName,$username,$password;
$result=false;
$connection=oci_connect($username,$password,$serverName);
if($connection){
    $result=oci_parse($connection,$query);
    oci_execute($result);
}
return $result;
}

function executeQuery($query){
    return executeNonQuery($query);
}
?>

