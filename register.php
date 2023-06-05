<?php
$names= $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$add=$_POST['address'];
$adhar=$_POST['adhar'];
$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$course=$_POST['course'];


    
$host = "localhost";
$username = "root";
$password = "";
$dbname="studentregister";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}



    $checkuser = "SELECT * FROM student where email='$email'";
    $result = mysqli_query($connection, $checkuser);
    $rows = mysqli_num_rows($result);
    if($rows > 0)
    {
        echo '<script>alert("Student '.$email.' Already registered ")</script>';
    }
    else
    {
        $fileName = $_FILES['image1']['name'];
        $file= $_POST['image1'];
$tempName = $_FILES['image1']['tmp_name'];
    if(!empty($fileName))
    {
        $location = "images/".$fileName;
        if(move_uploaded_file($tempName, $location))
        {
        }
    }

        $query = "INSERT INTO student VALUES ('$names','$email','$phone','$gender','$dob','$add','$adhar','$mark1','$mark2','$location','$course')";
        if (mysqli_query($connection, $query)) 
        {
            echo '<script>alert("You are registered '.$location.' successfully ")</script>';
            // include "login.php";
        } 
        else 
        {
            echo '<script>alert("Registeration Unsuccessfull")</script>';
        }
     }

mysqli_close($connection);
?>