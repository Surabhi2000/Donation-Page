<?php
if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $city=mysqli_real_escape_string($con, $_POST['city']);
    $mail=mysqli_real_escape_string($con, $_POST['mail']);
    $password=mysqli_real_escape_string($con, $_POST['password']);
    
    $pass=password_hash($password,PASSWORD_BCRYPT);

    $insertquery="INSERT INTO user_information (Name, City, Email, Password) VALUES ('$name','$city','$mail','$pass')";
    if(mysqli_query($con, $insertquery)){
        ?>
        <script>
            alert("Registration Successfully");
        </script>
        <?php
    }
    else{
        echo "Error: " . $insertquery . "" . mysqli_error($con);
    }
    mysqli_close($con);
 }  
 ?>
