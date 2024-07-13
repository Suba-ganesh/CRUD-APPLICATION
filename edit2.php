
               
                        <?php
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $dept=$_POST['department'];
                        $mobile=$_POST['mobile'];
                        $con=mysqli_connect("localhost","root","","college");
                        $sql=" UPDATE form SET NAME = '$name',DEPARTMENT = '$dept',MOBILE = '$mobile' WHERE id='$id'";
                        $r=mysqli_query($con,$sql);
                        if($r){
                            echo "<script>location.replace('index.php')</script>";
                        }
                        else {
                            echo "ERROR!";
                        }
                        
                        ?>
                        


                       


