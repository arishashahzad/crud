<?php
include 'config.php';
include 'header.php';

$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$password=$row['password'];
$date=$row['date'];
$contact=$row['contact'];
$message=$row['message'];
$address=$row['address'];


if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$message=$_POST['message'];
$address=$_POST['address'];

    $sql= "UPDATE `crud` SET `id`=$id,`fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`date`='$date',`contact`='$contact',`message`='$message',`address`='$address' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
    
      $_SESSION['status'] = " UPDATED SUCCESSFULLY";
      $_SESSION['status_code'] = "success";


  } else{
    
      $_SESSION['status'] = " Data not register";
      $_SESSION['status_code'] = "error";
      die(mysqli_error($conn));
  }
}   ?>

</style>

<h1 class="text-center">Update User</h1>
<div class="container">
  <form method="post">
<div class="form-group">
<label class="text-primary">First Name</label>
    <input type="name" class="form-control" placeholder="Enter Your First Name" name="fname" value=<?php echo $fname;?>>
</div>
<div class="form-group">
     <label class="text-primary">Last Name</label>
    <input type="name" class="form-control" placeholder="Enter Your Last Name" name="lname" value=<?php echo $lname;?>>
</div>
<div class="form-group">
     <label class="text-primary">Email</label>
    <input type="email" class="form-control" placeholder="Enter Your Email" name="email"  value=<?php echo $email;?>>
</div>
<div class="form-group">
     <label class="text-primary">Password</label>
    <input type="text" class="form-control" placeholder="Enter Your Password" name="password"  value=<?php echo $password;?>>
</div>
<div class="form-group">
     <label class="text-primary">Date</label>
    <input type="date" class="form-control" placeholder="Enter Your Date" name="date" value=<?php echo $date;?>>
</div>
<div class="form-group">
     <label class="text-primary">Contact</label>
    <input type="contact" class="form-control" placeholder="Enter Your C.No" name="contact"value=<?php echo $contact;?>>
</div>
<div class="form-group">
     <label class="text-primary">Message</label>
    <input type="text" class="form-control" placeholder="Enter Your Message" name="message"value=<?php echo $message;?>>
</div>

<div class="form-group">
     <label class="text-primary">Address</label>
    <input type="text" class="form-control" placeholder="Enter Your Address" name="address"  value=<?php echo $address;?>>
</div>
<div class="text-center mt-3">

<input class="btn btn-primary" type="submit" value="update" name="update">
</div>
</form>  
</div>
<?php
include 'footer.php';

?>

