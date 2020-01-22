<?php 

define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/laptop_service.php");
if(isset($_POST['AddProduct'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'upload/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
               $result=addLaptop($_POST['Name'],$_POST['Brand'],$_POST['Generation'],$_POST['Processor'],$_POST['Display_Size'],$_POST['RAM'],$_POST['ROM'],$_POST['Buying_Price'],$_POST['Selling_Price'],$_POST['Quantity'],$name);
        if($result){
            echo "laptop Added.";    }
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}

?>

 