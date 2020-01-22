<?php
include_once (PROJECT_ROOT_PATH ."/../../../lib/db.php");
function addUser($user){
    $query="INSERT INTO users(first_name,last_name,email,password,u_type) VALUES('$user[fname]','$user[lname]','$user[email]','$user[password]','C')";
    return executeNonQuery($query);
}


function checkUser($user){
	 session_start();
	$query="SELECT * FROM users WHERE email='$user[email]' AND password='$user[password]'";
     $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
        $row=oci_fetch_array($result);
        
        
        $U_TYPE=$row['U_TYPE'];
		$_SESSION['email']=$user['EMAIL'];
		$_SESSION['U_TYPE']=$U_TYPE;
		


    }
    
	else
	{
		echo "No data found.<br/>";
	}
   return $user;

	}

