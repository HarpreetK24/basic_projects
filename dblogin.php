<?php
require("db.php");
session_start();
$email=$_POST['username'];
$passwords=$_POST['password'];

$query = "SELECT * FROM registerstu where email='$email' and pass='". md5($passwords) ."'";

    if (!mysqli_query($connection, $query)) 

    {
        echo "Select Query" . mysqli_error($connection);
    }
   
$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$name = $row['nam']; // fetching username from DB nam is col name
if ($rows == 1) {
    $_SESSION['username'] = $name;
    // Redirect to user dashboard page
    header("Location: Studenthom.php");
} 
else {
    echo "<div class='form'>
          <h3>Incorrect Username/password.</h3><br/>
          <p class='link'>Click here to <a href='login.html'>Login</a> again.</p>
          </div>";
}

// if (mysqli_num_rows($result) > 0)
// {
    
//     while($row = mysqli_fetch_assoc($result))
//     {
//         echo '<script>alert("Welcome to ilearn")</script>';
//         include 'homepage.html';
//     }
// } 
// else 
// {
//     echo "<script type='text/jscript'>alert('Wrong Email!!.')</script>";
//     include 'login.html';
// }
?>