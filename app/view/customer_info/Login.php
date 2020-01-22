
<?php
//session_start();
define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/customer_info/user_service.php");
    
if($_SERVER['REQUEST_METHOD']=="POST"){
    $result=accessUser($_POST['email'],$_POST['password']);
  
    
    if($result){
        if($_POST['email']=="wahidnj@gmail.com")
        {
        	header('Location: ../products/ManagerHome.php');
        
        }
        else {
        	
        	header('Location: ../products/Home.php');
        }
    }
    else{
    	echo "PASSWORD NOT MATCH";
    }
}

?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body>
		<label><h2>Login</h2></label>
		<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" onsubmit="return validation();">
			
			<input type="email" name="email" id="email" placeholder="Enter email address"/>
			<input type="password" name="password" id="password" placeholder="Enter password"/>
			<input type="submit" name="submit" value="Login"/>
			
			<br><h5>Don't Have Any Account?<h5><br>
			<a href="Registration.php" ><button type="button" name="registration" value="registration">Register</button></a>
		
	</form>
		<div id="eresult" style="color:red"> </div>
		<script type="text/javascript"> 

			function validation(){

				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;

				if(email=='' || password==''){
					document.getElementById("eresult").innerHTML= "All Field Required";
					return false;
				}
				else if(password.length<8){

					document.getElementById("eresult").innerHTML= "Password Must Be 8 Characters";
					return false;
				}
				else{
					return true;
				}
			}

		</script>


	</body>


</html>