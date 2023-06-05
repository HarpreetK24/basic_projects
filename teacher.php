<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, so remove the login and signup options
    echo "<link rel='stylesheet' href='Style.css'>";
    echo "<header class='header'>
    <img src='images/i-Learn 1_nobg.png' class='logo'>
    <b>
        <ul class='nav'>
            <li><a href='dashboard.php'>Dashboard</a></li>
            <li><a href='#'>Contact us</a></li>
            <li><a href='#'>Manage Course</a></li>
            <li><a href='logout.php'>Log out</a></li>
        </ul>
    </b>
</header>";
    // Add any other content for logged in users here
}
else
{
    echo "<link rel='stylesheet' href='Style.css'>";
    echo "<header class='header'>
    <img src='images/i-Learn 1_nobg.png' class='logo'>
    <b>
        <ul class='nav'>
            <li><a href='dashboard.php'>Dashboard</a></li>
            <li><a href='#'>Contact us</a></li>
            <li><a href='#'>Manage Course</a></li>
            <li><a href='teacherlog.php'>Log in</a></li>
            <li><a href='teachersignup.php'>Sign up</a></li>
        </ul>
    </b>
</header>";
}
?>

<!DOCTYPE html>

</html>
<title>iLearn</title>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teacher.css">

</head>

<body style="background-color: bisque;">
    
    <div style="color: white; position: relative; top:150px; font-size: 80px; left:150px;font-family:sans-serif">
        Let's <br /> Teach.
    </div>
    <i>
        <p style=" color: white; position: relative; top:130px; font-size: 40px; left:160px;font-family: sans-serif">
            -The new way of teaching</p>
    </i>
    <section class="w3-container" style="background-color: black; position: relative;top:300px; padding-top:200px">
        <a href="addcourse.php"> <button class="cssbuttons-io-button"> ADD COURSE
                <div class="icon">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </button></a>
        <a href="#"><button class="cssbuttons-io-button2"> ADD QUIZ
                <div class="icon2">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </button></a>

    </section>
    <div id="pricing-footer">
        <div class="price-help">
            <h4 class="support-title">Need a Support? </h4>
            <p class="support-description">Any assistence or suggestion regarding this platform.</p>
            <button class="open-button" onclick="openForm()">Contact Us</button>
            <div class="form-popup" id="myForm">
                <form action="teachfeed.php" class="form-container" method="post">
                    <h1>Contact Us</h1>

                    <label for="name" style="padding-right:1000px;"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" required>

                    <label for="email" style="padding-right:1000px;"><b>Email</b></label>
                    <input type="email" placeholder="Enter email" name="email" required>

                    <label for="number" style="padding-right:1000px;"><b>Number</b></label>
                    <input type="text" placeholder="Enter number" name="number" required>

                    <label style="padding-right:1000px;"><b>Message</b></label>
                    <textarea placeholder="Enter your suggestion" name="suggestion" required></textarea>


                    <input type="submit" class="btn" value="submit">
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>
        </div>

    </div>
    <footer class="footer">
        <p>Questions? Call 1-866-579-7172</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Ways To Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Netflix Originals</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Redeem Gift Cards</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Buy Gift Cards</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
        </div>

    </footer>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("pricing-footer").style.opacity = 1;
            document.getElementById("footer").style.opacity = 0.5;
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>