<?php
include_once (PROJECT_ROOT_PATH ."/../../../lib/db.php");
function addNewPendrive($pendrive){
	// $target = "pendrives/".photo;

    $query="INSERT INTO pendrives(
      PEINVOICE,peid,brand,s_size,port_type,b_price,s_price,quantity,available_quantity,add_date,photo) VALUES(PENDRIVE_INVOICE.nextval,'$pendrive[Product_id]','$pendrive[Brand]','$pendrive[Size]','$pendrive[Port_Type]','$pendrive[Buying_Price]','$pendrive[Selling_Price]','$pendrive[Quantity]','$pendrive[Quantity]',sysdate,'$pendrive[image]')";
   
   
  	
     return executeNonQuery($query);
}

function addSold($sold){

                $query="INSERT INTO sold_histroy(
      s_date,pinvoice,email,b_price,s_price,quantity,profit) VALUES(sysdate,$sold[invoice],'$sold[email]',$sold[bprice],$sold[sprice],$sold[quantity],$sold[profit])";


}

function getAllProduct(){
    $query="SELECT * FROM products ";
    $result=executeQuery($query);
    $productList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $productList[$i]=$row;
       }
    }
    return $productList;
  }

  function getAllProductPLSQL(){
    $query="BEGIN PRODUCT_PROCEDURE (SYS_REFCURSOR;END;)";
    $result=executeQuery($query);
    $productList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $productList[$i]=$row;
       }
    }
    return $productList;
  }



//    $query= "declare 
// p products%rowtype;
// cursor c1
// is
// select * from products;
// begin
//   OPEN c1;
//   LOOP
//     FETCH c1 INTO p;
//     EXIT WHEN c1%notfound;

//     dbms_output.put_line( p.pid || ' ' || p.pname || ' ' || p.quantity );
//   END LOOP;
//   CLOSE c1; 
// exception when others then
// dbms_output.put_line('error');
// end";
// $result=executeQuery($query);
//     $productList=array();
//     if($result){
//        for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
//            $productList[$i]=$row;
//        }
//     }
//     return $productList;



function getProductByInvoice($invoice){
    $query="SELECT * FROM products WHERE pinvoice=$invoice";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}

function getPendrive($in){
    $query="SELECT * FROM pendrives WHERE peinvoice=$in";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}

function getLaptop($in){
    $query="SELECT * FROM laptops WHERE LINVOICE=$in";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}
function getTablet($in){
    $query="SELECT * FROM tablets WHERE TINVOICE=$in";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}
function getMonitor($in){
    $query="SELECT * FROM monitors WHERE MINVOICE=$in";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}

function getHeadphone($in){
    $query="SELECT * FROM headphones WHERE HINVOICE=$in";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}

function getDeletePendrive($in){

    $query="DELETE FROM pendrives WHERE peinvoice=$in";
    return executeNonQuery($query);
}

function getDeleteMonitor($in){

    $query="DELETE FROM monitors WHERE minvoice=$in";
    return executeNonQuery($query);
}

function getDeleteHeadphone($in){

    $query="DELETE FROM headphones WHERE hinvoice=$in";
    return executeNonQuery($query);
}

function getDeleteTablet($in){

    $query="DELETE FROM tablets WHERE tinvoice=$in";
    return executeNonQuery($query);
}

function getDeleteLaptop($in){

    $query="DELETE FROM laptops WHERE linvoice=$in";
    return executeNonQuery($query);
}



function getUpdatePendrive($invoice,$q,$sell_Price){

  $query="UPDATE pendrives SET quantity=quantity+$q
,AVAILABLE_QUANTITY=AVAILABLE_QUANTITY+$q,s_price=$sell_Price WHERE peinvoice=$invoice";
    return executeNonQuery($query);

}


function getUpdateMonitor($invoice,$q,$sell_Price){

  $query="UPDATE monitors SET quantity=quantity+$q,AVAILABLE_QUANTITY=AVAILABLE_QUANTITY+$q,s_price=$sell_Price WHERE minvoice=$invoice";
    return executeNonQuery($query);

}

function getUpdateLaptop($invoice,$q,$sell_Price){

  $query="UPDATE laptops SET quantity=quantity+$q,AVAILABLE_QUANTITY=AVAILABLE_QUANTITY+$q,s_price=$sell_Price WHERE linvoice=$invoice";
    return executeNonQuery($query);

}

function getUpdateTablet($invoice,$q,$sell_Price){

  $query="UPDATE tablets SET quantity=quantity+$q,AVAILABLE_QUANTITY=AVAILABLE_QUANTITY+$q,s_price=$sell_Price WHERE tinvoice=$invoice";
    return executeNonQuery($query);

}

function getUpdateHeadphone($invoice,$q,$sell_Price){

  $query="UPDATE headphones SET quantity=quantity+$q,AVAILABLE_QUANTITY=AVAILABLE_QUANTITY+$q,s_price=$sell_Price WHERE hinvoice=$invoice";
    return executeNonQuery($query);

}

function addNewCart($cart){
  // $target = "pendrives/".photo;

    $query="INSERT INTO cart(
        PINVOICE,pid,brand,quantity,b_price,s_price,t_price,email) VALUES('$cart[invo]','$cart[id]','$cart[brand]','$cart[quantity]','$cart[bprice]','$cart[sprice]','$cart[total]','$cart[email]')";
   
   
    
     return executeNonQuery($query);
}

function addNewWish($wish){
  // $target = "pendrives/".photo;

    $query="INSERT INTO wishlist(
      PINVOICE,pid,pname,s_price,email) VALUES('$wish[invoice]','$wish[id]','$wish[brand]','$wish[sprice]','$wish[email]')";
   
   
    
     return executeNonQuery($query);
}


function getWishByEmail($email){
    $query="SELECT * FROM wishlist WHERE email='$email'";
    $result=executeQuery($query);
    $wishList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $wishList[$i]=$row;
       }
    }
    return $wishList;

}

function deleteWish($invoice,$email){
    $query="DELETE FROM wishlist WHERE pinvoice=$invoice and email='$email'";
    return executeNonQuery($query);
}


function addNewLaptop($laptop){
  // $target = "pendrives/".photo;

    $query="INSERT INTO laptops(LINVOICE,LID,LNAME,LBRAND,GENERATION,PROCESSOR,D_SIZE,RAM,ROM,GRAPHICS,B_PRICE,S_PRICE,QUANTITY,AVAILABLE_QUANTITY,ADD_DATE,PHOTO) VALUES(LAPTOP_INVOICE.nextval,'$laptop[Name]','$laptop[Brand]','$laptop[Brand]','$laptop[Generation]','$laptop[Processor]','$laptop[Display_Size]','$laptop[RAM]','$laptop[ROM]','NVIDIA',$laptop[Buying_Price],$laptop[Selling_Price],$laptop[Quantity],$laptop[Quantity],sysdate,'$laptop[image]')";
   
   
    
     return executeNonQuery($query);
}
function addNewHeadphone($headphone){
  // $target = "pendrives/".photo;

    $query="INSERT INTO Headphones(HINVOICE,HID,HNAME,BRAND,CONNECTIVITY,B_PRICE,S_PRICE,QUANTITY,AVAILABLE_QUANTITY,ADD_DATE,PHOTO) VALUES(HEADPHONE_INVOICE.nextval,'$headphone[Brand]','$headphone[Brand]','$headphone[Brand]','$headphone[Connectivity]',$headphone[Buying_Price],$headphone[Selling_Price],$headphone[Quantity],$headphone[Quantity],sysdate,'$headphone[image]')";
   
   
    
     return executeNonQuery($query);
}

function addNewMonitor($monitor){
  // $target = "pendrives/".photo;

    $query="INSERT INTO Monitors(MINVOICE,MID,MNAME,MBRAND,D_SIZE,D_RESOLUTION,B_PRICE,S_PRICE,QUANTITY,AVAILABLE_QUANTITY,ADD_DATE,PHOTO) VALUES(MONITOR_INVOICE.nextval,'$monitor[Brand]','$monitor[Brand]','$monitor[Brand]','$monitor[Display_Size]','$monitor[Processor]',$monitor[Buying_Price],$monitor[Selling_Price],$monitor[Quantity],$monitor[Quantity],sysdate,'$monitor[image]')";
   
   
    
     return executeNonQuery($query);
}

function addNewTablet($tablet){
  // $target = "pendrives/".photo;

    $query="INSERT INTO Tablets(TINVOICE,TID,TNAME,BRAND,PROCESSOR_TYPE,PROCESSOR,D_SIZE,RAM,ROM,B_PRICE,S_PRICE,QUANTITY,AVAILABLE_QUANTITY,ADD_DATE,PHOTO) VALUES(TABLET_INVOICE.nextval,'$tablet[Brand]','$tablet[Brand]','$tablet[Brand]','$tablet[Processor_Type]','$tablet[Processor]','$tablet[Display_Size]','$tablet[Ram]','$tablet[Rom]',$tablet[Buying_Price],$tablet[Selling_Price],$tablet[Quantity],$tablet[Quantity],sysdate,'$tablet[image]')";
   
   
    
     return executeNonQuery($query);
}



function getAllPendrive(){
    $query="SELECT * FROM pendrives";
    $result=executeQuery($query);
    $pendriveList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $pendriveList[$i]=$row;
       }
    }
    return $pendriveList;
}
function getAllLaptop(){
    $query="SELECT * FROM laptops";
    $result=executeQuery($query);
    $laptopList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $laptopList[$i]=$row;
       }
    }
    return $laptopList;
}
function getAllHeadphone(){
    $query="SELECT * FROM headphones";
    $result=executeQuery($query);
    $headphoneList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $headphoneList[$i]=$row;
       }
    }
    return $headphoneList;
}

function getAllMonitor(){
    $query="SELECT * FROM monitors";
    $result=executeQuery($query);
    $monitorList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $monitorList[$i]=$row;
       }
    }
    return $monitorList;
}

function getAllTablet(){
    $query="SELECT * FROM tablets";
    $result=executeQuery($query);
    $tabletList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $tabletList[$i]=$row;
       }
    }
    return $tabletList;
}

function getUserInfo($email){
    $query="SELECT * FROM users WHERE email='$email'";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}



function getExist($invoice)
{
    $query="SELECT * FROM cart WHERE pinvoice=$invoice";
    $result=executeQuery($query);
    $user=null;
    if($result){
        $user=oci_fetch_assoc($result);
    }
    return $user;
}

function editCart($cart){

         $query="UPDATE cart SET quantity=$cart[quantity],t_price=$cart[price] WHERE pinvoice=$cart[invoice]";
               return executeNonQuery($query);
             }


function editPro($qty){

         $query="UPDATE products SET available_quantity=available_quantity-$qty[quantity] WHERE pinvoice=$qty[invoice]";
               return executeNonQuery($query);
             }


function addNewSold($sold){
 

    $query="INSERT INTO sold_history(
            S_DATE,PINVOICE,EMAIL,B_PRICE,S_PRICE,QUANTITY,PROFIT,PID) VALUES(to_char(sysdate,'DD/MM/YY'),$sold[invoice],'$sold[email]',$sold[bprice],$sold[Selling_Price],$sold[Quantity],$sold[profit],'$sold[Product_id]')";    
     return executeNonQuery($query);
}



function editSold($sold){

         $query="UPDATE sold_history SET QUANTITY=$sold[quantity] and PROFIT=$sold[profit] WHERE PINVOICE=$sold[invoice]";
               return executeNonQuery($query);
             }

function dCart($email){
    $query="DELETE FROM cart WHERE EMAIL='$email'";
    return executeNonQuery($query);
}

function getProfit(){

         $query="select * from profit";
         $result=executeQuery($query);
    $profitList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $profitList[$i]=$row;
       }
    }
    return $profitList;
               
}


function getSold(){
    $query="SELECT * FROM sold_history";
    $result=executeQuery($query);
    $productList=array();
    if($result){
       for ($i=0; $row =oci_fetch_assoc($result) ; $i++) { 
           $productList[$i]=$row;
       }
    }
    return $productList;
  }

     
 ?>