<?php
if(isset($_POST['donate'])){
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    $amt=mysqli_real_escape_string($con, $_POST['num']);
    
    $insert="INSERT INTO payment (username, email, num) VALUES ('$username','$email','$amt')";
    if(mysqli_query($con, $insert)){
        ?>
        <script>
            alert("Registration Successfully");
        </script>
        <?php
    }
    else{
        echo "Error: " . $insert . "" . mysqli_error($con);
    }
    mysqli_close($con);
 }  
 ?>
    