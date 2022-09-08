<?php
include "config.php";
include 'header.php';

?>




<div class="container">
        <table class="table table-light">
  <thead>
    <tr>
      <th>SNO</th>
      <th >Firstname</th>
      <th >Lastname</th>
      <th >Email</th>
      <th >Password</th>
      <th >Date</th>
      <th >Contact</th>
      <th>Message</th>
      <th >Address</th>
      <th >Action</th>
    </tr>
  </thead>  
  <tbody>
<?php
$sql="SELECT * FROM `crud`";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $fname=$row['fname'];
      $lname=$row['lname'];
      $email=$row['email'];
      $password=$row['password'];
      $date=$row['date'];
      $contact=$row['contact'];
      $message=$row['message'];
      $address=$row['address'];
        echo ' <tr>
        <th>'.$id.'</th>
        <td>'.$fname.'</td>
        <td>'.$lname.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$date.'</td>
        <td>'.$contact.'</td>
        <td>'.$message.'</td>
        <td>'.$address.'</td>
      

        <td>
       <button class="btn btn-success"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
       <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
       </td>
      </tr>';
    } } ?>
</tbody>
</table>
    </div>
    <?php
include 'footer.php';
?>
