<?php
    session_start();
    // Destroy session
    echo '<script>alert("Logged out Successfully")</script>';
    if(session_destroy()) {
        // Redirecting To Home Page
        
        header("Location: homepage.php");
    }
?>