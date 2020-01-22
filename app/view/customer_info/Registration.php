<?php
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/customer_info/user_service.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	$u='C';
    $result=addNewUserPLSQL($_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['cpassword'],$u);
    if($result){
        echo "User Added.";
    }
}
?>

<html>
	<head></head>
	
	<body>	
		<table width=90% align="center" >
            
  </table>
		<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
				<fieldset >
				<legend align="center"> <h2>Registration</h2></legend>

				<table align="center" height="200" >
				
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname"/></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname"/></td>
				</tr>
				

				<tr>
					<td>Email Address:</td>
					<td><input type="text" name="email"/></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"/></td>
					
					
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword"/></td>
					
					
				</tr>
				
				<tr>
					<td><input type="submit" name="submit" value="Register"/></td>
					<td><a href="Login.php"><button type="button" name="done" value="Done">Done</button></a></td>
				</tr>
				
					
				</table>
		
		</fieldset>
		</form>	
		
	</body>
</html>