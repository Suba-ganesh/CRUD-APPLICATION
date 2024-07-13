<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentApplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <div class="container" id="conatainer" >
        <div class="row">
            <div class="col">
            <div class="card" style="width: 50rem;">
                  <div class="card-header">
                        STUDENT APPLICATION
                            </div>
                            <div class="card-body">
                                <a href="add.php"><div class="btn btn-success">ADD</div></a>
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">MOBILE</th>
      <th scope="col">options</th>
    </tr>
  </thead>
  <tbody>
   <?php

               $con=mysqli_connect("localhost","root","","college");
                 $sql="SELECT * FROM form ";
                 $r=mysqli_query($con,$sql);

                 $id=1;

                 while($row=mysqli_fetch_array($r)){
                       $uid = $row['ID'];
                       $name = $row['NAME'];
                       $dept = $row['DEPARTMENT'];
                       $mobile = $row['MOBILE'];
   ?>

   <tr>
    <td><?php echo $id ?> </td>
    <td><?php echo $name ?></td>
    <td>  <?php echo $dept ?></td>
    <td> <?php echo $mobile ?></td>
    <td><a href ='edit.php?edit=<?php echo $uid ?>'><button class="btn btn-warning"> EDIT</button></a></td>
    <td><a href='delete.php?del=<?php echo $uid ?>'><button class="btn btn-danger">DELETE</button></a></td>
   </tr>
   <?php $id++; } ?>

  </tbody>
</table>
    </div>
                        
</div>
            </div>
        </div>
    </div>
</body>
</html>