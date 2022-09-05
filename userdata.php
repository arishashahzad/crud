 <?php

include "config.php";
include "header.php";
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
</body>
</html>

