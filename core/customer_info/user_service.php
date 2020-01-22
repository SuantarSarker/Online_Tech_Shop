    <?php
   
    include_once (PROJECT_ROOT_PATH ."/../../../data/customer_info/user_data_access.php");

    function addNewUser($fname,$lname,$email,$password,$cpassword){
        $valid=0;
        $count=0;

       // first name validation
        if($fname=="")
        {
            echo "First name can't be empty"."<br/>";
        }

        else{

            if(ord($fname[0]) <= 57){
                echo "Name Must start with letter"."<br/>";
            }
            
            else{
                for ($i=0; $i <strlen($fname) ; $i++){
                if (ord($fname[$i]) == 95 || ord($fname[$i]) == 32 || 
                ord($fname[$i]) == 46 || (ord($fname[$i])>=65 && ord($fname[$i])<=90) || (ord($fname[$i])>=97 && ord($fname[$i])<=122)){
                        $valid=1;   
                    }
                else{
                    $valid=0;
                }
                }
                
            }
        }

       
        
        // last name validation
        if($lname=="")
        {
            echo "Last name can't be empty"."<br/>";
        }

        else{

            if(ord($lname[0]) <= 57){
                echo "Last Name Must start with letter"."<br/>";
            }
            
            else{
                for ($i=0; $i <strlen($lname) ; $i++){
                if (ord($lname[$i]) == 95 || ord($lname[$i]) == 32 || 
                ord($lname[$i]) == 46 || (ord($lname[$i])>=65 && ord($lname[$i])<=90) || (ord($lname[$i])>=97 && ord($lname[$i])<=122)){
                        $valid=1;   
                    }
                else{
                    $valid=0;
                }
                }
                
            }
        }

          
    // email validation

        $count=0;
        $countLetter=0;
        $countLetter2=0;
        $valid=1;
        $countDot=0;

    if($email=="")
    {
        echo "Email can't be empty";
    }

    else{
        for ($i=0; $i < strlen($email) ; $i++) { 
      
            if(ord($email[$i])==64){
                if($i<1){
                    echo "Invalid Email";
                    $valid=0;
                    break;
                }
                else{
                    for ($j=$i; $j<strlen($email) ; $j++) {
                        if(ord($email[$j])==46){
                                $countDot++;
                            for ($k=$j-1; $k>$i ; $k--) 
                            {
                                $countLetter++;
                            }
                            for ($k=$j+1; $k<strlen($email) ; $k++) 
                            {
                                $countLetter2++;
                            }
                    }
                    }   
                    if($countLetter<1 || $countDot>1 || $countLetter2<1){
                        $valid=0;}
                }
            }
            
            elseif(ord($email[$i])==46){
                for ($j=0; $j < strlen($email) ; $j++) { 
                    if(ord($email[$j])==64){
                        $count=1;  
                    }
                }
                //echo $count;
                if($count!=1){
                    echo "Invalid Email";
                    $count=0;
                    $valid=0;
                }
            }  
        }
        }
        for ($i=0; $i <strlen($email) ; $i++) { 
            if(ord($email[$i])==64 || ord($email[$i])==46){
                $count++;
            }
        }
        if($count==0 && $valid==1){
            echo "Invalid Email";
            $valid=0;}

        if ($valid==1 && $count>1 && $countDot==1) {
            $valid==1;
        }
        else{
            echo "Invalid Email";
        }




          //password validation 

        	              if(empty($_POST['password']))
        	            {
        	            	
        	            	
        	            	echo "Password is require";
        	            	
        	            }

        	             if(empty($_POST['cpassword']))
        	            {
        	            	
        	            	echo "Confirm Password is require";
        	            	
        	            }

        	            if ($password!=$cpassword) 
        	            {
        	            	
        	            	echo "You need to give password and Confirm Password both are same";
        	            	
        	            }
        	            else if(strlen($password)<8) 
        	            {
        	            
        	            	echo "Password at least 8 Length";
        	            	
        	            }

        	            if(!empty($fname) &&!empty($lname) && !empty($password) && !empty($cpassword) &&  !empty($email))
        	            {
        	            	
        	            	 $user=array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"password"=>$password);
                             return addUser($user);

        	            }

               
                        else {
                      	echo "Please fiil up the requirment.";
                           }

        

        }

     
//Login
     function accessUser($email,$password)

     {
      
                        // session_start();
                          if(empty($email)||empty($password))
                        {
                            
                            
                            echo "please fill the email or password";
                            
                        }
                        



                        $user=array("email"=>$email,"password"=>$password);
                        return checkUser($user);


     }

 function addNewUserPLSQL($fname,$lname,$email,$password,$cpassword,$u){
    $c = oci_connect("system", "3839306", "localhost/orcl");
        
        if (!$c) {
            $m = oci_error();
            echo $m['message']."\n";
            exit;
        }
        else 
        {

            $statement = "begin insert_into_users(:FIRST_NAME, :LAST_NAME,:EMAIL,:PASSWORD,:U_TYPE); end;";
            $s = oci_parse($c, $statement);
            oci_bind_by_name($s, ':FIRST_NAME', $fname);
            oci_bind_by_name($s, ':LAST_NAME', $lname);
            oci_bind_by_name($s, ':EMAIL', $email);
               oci_bind_by_name($s, ':PASSWORD', $password);
                  
                     oci_bind_by_name($s, ':U_TYPE', $u_type);
            if(oci_execute($s))
            {
                oci_close($c);
                echo "Done";
                header('Location: ../products/Home.php');
            }
            else
            {
                oci_rollback($c);
                $error=oci_error($statement);
                echo $error['message'];
                oci_close($c);
            }
        }
    }




     


            
    ?>