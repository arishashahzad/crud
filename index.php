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
    echo "<div class='alert alert-success'>data inserted</div>";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <h1  class="text-center">REGISTER USERS<h1>
        <div class="container">

    <form action= "index.php" method="post">
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
<h1 class="text-center"> Users Data </h1>
<div class="container">
    <table class="table table-light">
        <thead>
        <th>SNO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>CONTACT</th>
        <th> ACTION</th>

</thead>
<tbody>
    <?php $i=1; while($row = mysqli_fetch_assoc($select_run)){?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row["name"]?></td> 
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["password"]?></td>
            <td><?php echo $row["contact"]?></td>
            <td> <a class="btn btn-success">EDIT</a> ||<a class="btn btn-danger">DELETE</a></td>
    </tr>
    <?php $i++;
    }?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>


