<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, so remove the login and signup options
    echo "<style>.log{display: none;}</style>";
    // Add any other content for logged in users here
}
else{
 echo "<style>.my{display: none;}</style>";}

?>
<!DOCTYPE html>

</html>
<title>COURSES</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    
</head>

<body style="background-color:rgb(255, 255, 229);">
    <br />
    
        <div style="width: 270px;">
            <a style="text-decoration: none" href="homepage.php">
                <h1 style="color:rgb(0, 0, 0);position: relative;left: 10px;"> iLearn | COURSES</h1>
            </a>
        </div>
    
    <br />
    <section>
        <nav class="container">
            <ul>
                <li class="cart">
                    <a href="cart.html">
                        <ion-icon name="basket"></ion-icon>Cart<span>0</span>
                    </a>
                </li>
                <li class="my">My Courses</li>
                <li class="log">Login
                    <ul class="sub-nav">
                    <a href="teacher.html"><li>As Teacher</li></a>
                        <a href="login.php"><li>As Student</li></a>

                    </ul>
                </li>

               <a href="sign-up.php" class="log"> <li>Sign up</li></a>

                </li>
            </ul>
        </nav>

    </section>

    <br />
    <br />
    <figure class="snip1171">
        <a href="Ds.html"><img src="images/ds1 (1).png" alt="sample71" /></a>
        <div class="price">₹500</div>
        <figcaption>
            <h3>Data Structures</h3>
            <p>
                Make your Datastructure strong using C language
            </p>
            <a class="add-cart cart3" href="#">Add to Cart</a>
        </figcaption>
    </figure>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="cart.js"></script>

</body>