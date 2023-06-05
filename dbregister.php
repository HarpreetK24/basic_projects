<?php
$names= $_POST['name'];
$email=$_POST['email'];
$passwords=$_POST['password'];


require("db.php");

if($names == "" || $email == "" || $passwords == "") //checks if data is entered in form or not
{
    echo '<script>alert("Data entries are missing")</script>';

}
else
{
    $checkuser = "SELECT * FROM registerstu where email='$email'";
    $result = mysqli_query($connection, $checkuser);
    $rows = mysqli_num_rows($result);
    if($rows > 0)
    {
        echo '<script>alert("User '.$email.' Already exists ")</script>';
        // header("Location: sign-up.php");
        include "sign-up.php";
    }
    else
    {
        $query = "INSERT INTO registerstu VALUES ('$names','$email','". md5($passwords) ."')";
        if (mysqli_query($connection, $query)) 
        {
            
            echo '<script>alert("You are registered successfully")</script>';
            include_once "send.php";
            include "sign-up.php";
        } 
        else 
        {
            echo '<script>alert("Registeration Unsuccessfull")</script>';
        }
     }

}



mysqli_close($connection);
?>