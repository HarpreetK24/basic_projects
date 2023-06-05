<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, so remove the login and signup options
    echo "<style>.log{display: none;}</style>";
    // echo "<li>My Courses</li>";
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
    <meta http-equiv="refresh" content="1800;url=logout.php">
    <link rel="stylesheet" href="cart.css">
</head>
<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname="e-learning";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
?>

<body style="background-color:rgb(239, 236, 229);">
    <br />
    <b>
    <div style="width: 270px;">
            <a style="text-decoration: none" href="homepage.php">
                <h1 style="color:rgb(0, 0, 0);position: relative;left: 10px;"> iLearn | COURSES</h1>
            </a>
        </div>
    </b>
    <br />
    <section>
    <nav class="container">
            <ul>
            <a href="cart.html">
                <li class="cart">
                        <ion-icon name="basket"></ion-icon>Cart<span>0</span>
                </li></a>
                <li class="my">My Courses</li>
                <a href="quiz3.php"><li class="my">Free Quiz</li></a>
                <a class="log" href="login.php"><li>Login</li></a>
               <a href="sign-up.php" class="log"> <li>Sign up</li></a>

                </li>
            </ul>
        </nav>

    </section>

    <br />
    <br />

    <form class="searchform" action="search.php" method="POST">
    <input type="text" placeholder="Search for courses" name="searchname">
    <button type="submit" name="submitsearch">Search</button>
    </form>
        <?php
        $sql= "SELECT * FROM addcourse";
        $result= $connection->query($sql);
        $cart  = "cart";
        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
                $course_id= $row['course_id'];
                echo ' <figure class="snip1171">
                <a href="java.html"><img style="width: 400px;height:253px"; src=" '.$row['image'].' " /></a>
                <div class="price">₹'.$row['selling_price'].'</div>
                <figcaption>
                    <h3>' .$row['course_name']. '</h3>
                    <p>
                    ' .$row['course_description']. '
                    </p>
                    <button class="add-cart '. $cart.$row['add_id']. '"  href="?'. $cart.$row['add_id']. '">Add to Cart</button>
                </figcaption>
            </figure>';
            }
        }
        
        ?> 
        
    </figure>
    <figure class="snip1171">
        <a href="AdvancedJava.html"><img id="java1" src="images/Advanced Java programming.jpg" alt="sample71" /></a>
        <div class="price">₹500</div>
        <figcaption>
            <h3>Advanced JAVA</h3>
            <p>
                Learn Advanced JAVA easily.
            </p>
            <a class="add-cart cart2" href="#">Add to Cart</a>
        </figcaption>
    </figure>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="cart.js"></script>
</body>