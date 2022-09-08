<?php
include 'config.php';
include 'header.php';
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $date=$_POST['date'];
  $contact=$_POST['contact'];
  $message=$_POST['message'];
  $address=$_POST['address'];

  $sql="INSERT INTO `crud`( `fname`, `lname`, `email`, `password`, `date`, `contact`, `message`, `address`) VALUES ('$fname','$lname','$email','$password','$date','$contact','$message','$address')";
  
  $result=mysqli_query($conn,$sql);

    if($result){
      
      $_SESSION['status'] = "REGISTER SUCCESSFULLY";
      $_SESSION['status_code'] = "success";


  } else{
    
      $_SESSION['status'] = " DATA NOT REGISTERED SUCCESSFULLY";
      $_SESSION['status_code'] = "error";
      die(mysqli_error($conn));
      

  }
}   ?>

</style>
<h1 class="text-center">Register User</h1>

  <form method="post">
<div class="">
     <label class="text-primary">First Name</label>
    <input type="name" class="form-control" placeholder="Enter  First Name" name="fname" >
</div>
<div class="">
     <label class="text-primary">Last Name</label>
    <input type="name" class="form-control" placeholder="Enter  Last Name" name="lname" >
</div>
<div class="">
     <label class="text-primary">Email</label>
    <input type="email" class="form-control" placeholder="Enter  Email" name="email">
</div>
<div class="">
     <label class="text-primary">Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password" >
</div>
<div class="">
     <label class="text-primary">Date</label>
    <input type="date" class="form-control" placeholder="Enter  Date" name="date" >
</div>
<div class="">
     <label class="text-primary">Contact</label>
    <input type="contact" class="form-control" placeholder="Enter contact nymber" name="contact" >
</div>
<div class="">
     <label class="text-primary">Message</label>
    <input type="text" class="form-control" placeholder="Enter  Message" name="message" >
</div>

<div class="">
     <label class="text-primary">Address</label>
    <input type="text" class="form-control" placeholder="Enter  Address" name="address" >
</div>

  <div class="text-center mt-3">

<input class="btn btn-primary" type="submit" value="submit" name="submit">
</div>
</form>  
</div>
  <?php
include 'footer.php';
  
  ?>