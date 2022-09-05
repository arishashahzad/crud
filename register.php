<?php
include "config.php";
include "header.php";
// insert
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $contact=$_POST["contact"];

  $insert= "INSERT INTO `register`(`name`, `email`, `password`, `contact`) VALUES ('$name','$email','$password','$contact ')";
$result = mysqli_query($conn,$insert);
if($result){
  echo "<div class='alert alert-success'>data inserted </div>";

}else{
  echo"error";
}
}
$select ="SELECT * FROM REGISTER";
$select_run = mysqli_query($conn,$select);
if($select_run){
  echo "selected";

}else{
  echo "error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    
<h1  class="text-center">REGISTER USERS<h1>
        <div class="container">

    <form action= "#" method="post">
        <div class="">
            <label for="">Name</label>
            <input  class="form-control"type ="text" name="name" required>
        </div>
        <div class="">
            <label for="">Email</label>
            <input   class="form-control"type ="email" name="email" required>
        </div>
        <div class="">
        <label for="">password</labeL>
        <input  class="form-control"type ="password" name="password" required>
        </div>
        <div class="">
            <label for="Contact">contact</label>
            <input   class="form-control"type ="number" name="contact" required>
        </div>
        <div class="text-center mt-3">

  <input  class="btn btn-primary"type="submit" value="submit" name="submit">
</form>

        </div>
</div>
</body>
</html>


