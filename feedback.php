<?php
require("db.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$suggestion=$_POST['suggestion'];

if($name != "" && $email != "" && $phone != "" && $suggestion != "") 
{
$checkuser = "SELECT * FROM registerstu where email='$email'";
    $result = mysqli_query($connection, $checkuser);
    $rows = mysqli_num_rows($result);
    if($rows > 0)
    {
        $query = "INSERT INTO feedbackstu VALUES('$name','$email','$phone','$suggestion')";
    if (mysqli_query($connection, $query)) 
    {

        header("Location: homepage.php");
    }   
    }
    else
    {
        echo '<script>alert("Please enter your registered email-id")</script>';
        header("Location: homepage.php");
    }
}
?>