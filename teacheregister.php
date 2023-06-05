<?php
$names= $_POST['fname']." ".$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$passwords=$_POST['pass2'];
$special=$_POST['special'];

require("db.php");

if($names == "" || $email == "" || $passwords == "") //checks if data is entered in form or not
{
    echo '<script>alert("Data entries are missing")</script>';

}
else
{
    $checkuser = "SELECT * FROM registerteach where email='$email'";
    $result = mysqli_query($connection, $checkuser);
    $rows = mysqli_num_rows($result);
    if($rows > 0)
    {
        echo '<script>alert("User '.$email.' Already exists ")</script>';
        // header("Location: sign-up.php");
        include "teachersignup.php";
    }
    else
    {
        $query = "INSERT INTO registerteach VALUES ('$names','$email','$phone','$special','". md5($passwords) ."')";
        if (mysqli_query($connection, $query)) 
        {
            echo '<script>alert("You are registered successfully")</script>';
            include "login.php";
        } 
        else 
        {
            echo '<script>alert("Registeration Unsuccessfull")</script>';
        }
     }

}



mysqli_close($connection);
?>