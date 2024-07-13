<?php
$n=$_POST['name'];
$d=$_POST['department'];
$m=$_POST['mobile'];
$con=mysqli_connect("localhost","root","","college");
$sql="INSERT INTO form (NAME,DEPARTMENT,MOBILE) VALUES ('$n','$d','$m')";
$r=mysqli_query($con,$sql);
if($r){
    echo "<script>location.replace('index.php')</script>";
}
else {
    echo "ERROR!";
}
?>