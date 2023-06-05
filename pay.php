<?php
$names= $_POST['fname']." ".$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gendar'];
$pay=$_POST['pay'];


require("db.php");

if($names == "" || $email == "" ) //checks if data is entered in form or not
{
    echo '<script>alert("Data entries are missing")</script>';

}
else
{
    $checkuser = "SELECT * FROM payment where email='$email'";
    $result = mysqli_query($connection, $checkuser);
    $rows = mysqli_num_rows($result);
    if($rows == 1)
    {
        $query = "INSERT INTO payment VALUES ('$names','$email','$gender','$pay')";
        if (mysqli_query($connection, $query)) 
        {
            echo '<script>alert("Mode of payment saved!!")</script>';
             include("Dashboard.php");
        }  
        else 
        {
            echo '<script>alert("Registeration Unsuccessfull")</script>';
        }
        
    }
    else
    {
        echo '<script>alert("Please enter your registered email-id")</script>';
        include("payment.html");
}
}




mysqli_close($connection);
?>