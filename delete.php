<?php 
                $con=mysqli_connect("localhost","root","","college");
                $del=$_GET['del'];
                 $sql="DELETE FROM form where id ='$del'";
                 $r=mysqli_query($con,$sql);

                 if($r){
                    echo "<script>location.replace('index.php')</script>";
                }
                else {
                    echo "ERROR!";
                }

                 
                       ?>
