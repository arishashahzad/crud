<?php
include "config.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `crud` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
 
    if($result){
        
        header('location: userdata.php');
        $_SESSION['status'] = " DELETED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";

    } else{
        $_SESSION['status'] = " ERROR SUCCESSFULLY";
        $_SESSION['status_code'] = "error";
       
      
    }
}

?>