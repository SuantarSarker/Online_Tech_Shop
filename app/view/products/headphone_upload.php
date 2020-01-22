

<?php 

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["AddProduct"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//       $result=addPendrive($_POST['Brand'],$_POST['Port_Type'],$_POST['Buying_Price'],$_POST['Selling_Price'],$_POST['Quantity'],'$name',$_POST['Size'],$_POST['Product_id']);
//        if($result){
//            echo "Pendrive Added.";    }
//     //         }
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

define('PROJECT_ROOT_PATH', __DIR__);
include_once (PROJECT_ROOT_PATH ."/../../../core/products/headphone_service.php");
if(isset($_POST['AddProduct'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'upload/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
               $result=addHeadphone($_POST['Brand'],$_POST['Connectivity'],$_POST['Buying_Price'],$_POST['Selling_Price'],$_POST['Quantity'],$name);
        if($result){
            echo "Headphone Added.";    }
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
// if(isset($_POST['AddProduct'])){



//  move_uploaded_file($_FILES["fil"]["name"], "upload/" . $_FILES['fil']['name']);

//  $location=$_FILES['fil']['name'];

//    $result=addPendrive($_POST['Brand'],$_POST['Port_Type'],$_POST['Buying_Price'],$_POST['Selling_Price'],$_POST['Quantity'],$location,$_POST['Size'],$_POST['Product_id']);
//     if($result){
//         echo "Pendrive Added.";
//     }

   
// //    if(isset($_FILES["fil"])){
// //    $name = $_FILES['fil']['name'];
// //    $target_dir = "upload/";
// //     $target_file = $target_dir . basename($_FILES['fil']['name']);


 
    
// //   $result=addPendrive($_POST['Brand'],$_POST['Port_Type'],$_POST['Buying_Price'],$_POST['Selling_Price'],$_POST['Quantity'],$name,$_POST['Size'],$_POST['Product_id']);
// //     if($result){
// //         echo "Pendrive Added.";
// //     }
// //      // Upload file
// //      move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

// //     //$image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
// // //  if(isset($_FILES['image'])){
// // //      $imag=file_get_contents($_FILES['image']['tmp_name']);


// //   }
// // else
// //   echo "image not set";
  
//   // Select file type
 
 
    
// }
?>