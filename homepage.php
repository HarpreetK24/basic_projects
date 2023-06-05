<?php

session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in, so remove the login and signup options
    echo "<style>.topnav{display: none;}.top{display: none;}</style>";
    // echo "<style>#hide1{display: none;}</style>";
    echo "<link rel='stylesheet' href='Style (1).css'>"; 
    // echo "<link rel='stylesheet' href='Style.css'>"; 
    echo "<div style='border: 2px solid black; border-radius: 20px; background-color: rgb(0, 0, 0); width: 98.90%;position: absolute;top: 10px;right: 8px; height:15%'>
        <a href='homepage.php'><img src='images/i-Learn 1_nobg.png'
                style='float: left;width: 220px;height: 100px;border: 0;'>
        </a>
    <div class='topnav1' id='myTopnav' style='padding-top: 25px;padding-left: 50px;float: left;'>
    <a href='homepage.php' class='active'>Home</a>
    <a href='#abtus'>About us</a>
    <a href='dashboard.php'>My Profile</a>
    <a href='courses.php'>Courses</a>
    <a href='#form-container'>Contact us</a>
    <a href='logout.php'>Log out</a>
    <a href='javascript:void(0);' style='font-size:15px;' class='icon' onclick='myFunction()'>&#9776;</a>
</div></div>";
}
else
{
    echo "<link rel='stylesheet' href='Style.css'>";
    echo "<div style='border: 2px solid black; border-radius: 20px; background-color: rgb(0, 0, 0); width: 98.90%;position: absolute;top: 10px;right: 8px; height:15%'>
    <a href='homepage.php'><img src='images/i-Learn 1_nobg.png'
            style='float: left;width: 220px;height: 100px;border: 0;'>
    </a>
    <div class='topnav' id='myTopnav' style='padding-top: 25px;padding-left: 50px;border-radius: 20px;'>
    <a href='homepage.php' class='active'>Home</a>
    <a href='#abtus'>About us</a>
    <a href='courses.php'>Courses</a>
    <a href='login.php'>Login</a>
    <a id='hide1' href='sign-up.php'>Sign up</a>
    <a href='#form-container'>Contact us</a>
    <a style='position:relative; left:400px;' href='teacher.php'>INSTRUCTOR</a>
    <a href='javascript:void(0);' style='font-size:15px;' class='icon' onclick='myFunction()'>&#9776;</a>
</div></div>";
}
?>
<!DOCTYPE html>

</html>
<title>iLearn</title>
<link rel="stylesheet" href="Style (1).css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1800;url=logout.php">
</head>

<body style="background-color:rgb(255, 255, 255);font-family: sans-serif;">
    <!-- <a href="homepage.html"><img src="/Users/harpreetkamboj/Documents/DBMS project/images/i-Learn 1_nobg.png" width=230px
            height=100px style=" background-color: rgb(64, 118, 212);border: 2px solid black;">
    </a> -->


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>


<div>
        <i style="position: absolute;top: 110px;right: 8px;width: 100%;">
            <h3 style="color:rgb(0, 0, 0); padding-top: -30px;z-index: -1;">
                <marquee>"The beautiful thing about learning is that nobody can take it away from you"
                </marquee>
                <!-- <hr style="border: 1px solid black;"> -->
            </h3>
        </i>
        <div style="padding-top: 200px;">
            <center>
                <img style=" border:none; border-radius:20px"
                    src="images/elearning.jpg" height="300" width="400">
                <b>
                    <h2
                        style="color:rgb(129, 18, 100);font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        LEARN WITH iLearn
                    </h2>
                </b>
                <i>
                    <p style="font-size:20px;color: white;">First you learn, then remove the 'l'</p>
                </i>
            </center>
        </div>

        <div id="abtus" style="border: 3px solid rgb(230, 170, 170);background-color: black; border-radius: 20px;">
            <u><b>
                    <h2
                        style="color:white;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif sans-serif;font-size:30px;padding-left: 30px;">
                        About Us</h2>
                </b></u>
            <p
                style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px;color: rgb(202, 197, 201);padding-left: 30px;">
                A form of self-collaborative learning, e-learning closely <br>collaborates with both the teacher and the
                learner.<br>The main objective is to enhance the quality of learning of students. <br>In other words, it
                is used to
                meet the needs of the learning style of students. <br>The main purpose of iLearn will be to provide
                quality
                education to students online, <br>thereby making it easy to access anytime and anywhere.<br> A platform
                that ensures
                a quicker delivery of lessons than traditional classrooms- A quick way of learning!

            </p>
            <div style="position: absolute;top: 630px;left: 950px;">

                <img src="images/Learn-new-programming-language-thumb (1).webp"
                    usemap="#image-map">


                <map name="image-map">
                    <area target="" alt="diamond" title="diamond"
                        href="https://github.com/DiamondMVC/Diamond#:~:text=Diamond%20is%20a%20powerful%20full,%3A%20https%3A%2F%2Fdiamondmvc.org%2F"
                        coords="111,114,128,95,94,95,100,87,131,93,97,98,103,104,107,107,111,110,121,86,120,85,119,97"
                        shape="poly">
                    <area target="" alt="js" title="js" href="https://www.w3schools.com/js/"
                        coords="153,81,153,116,187,116,186,82" shape="poly">
                    <area target="" alt="c++" title="c++"
                        href="https://www.w3schools.com/cpp/cpp_intro.asp#:~:text=C%2B%2B%20is%20an%20object%2Doriented,fun%20and%20easy%20to%20learn!"
                        coords="216,91,228,82,215,108,228,116,243,107,243,90,228,83,215,106" shape="poly">
                    <area target="" alt="react" title="react" href="https://reactjs.org/"
                        coords="279,85,278,93,280,98,283,104,273,97,274,102,279,110,282,112,290,107,293,113,297,112,286,86,291,88,294,85,303,101,296,103"
                        shape="poly">
                    <area target="" alt="html" title="html" href="https://www.w3schools.com/html/"
                        coords="98,139,98,167,112,173,124,165,123,139" shape="poly">
                    <area target="" alt="python" title="python" href="https://www.python.org/"
                        coords="165,147,154,148,152,155,155,160,161,163,164,169,169,171,176,168,179,161,163,140,169,140,178,143,180,148,181,163,163,139,187,152"
                        shape="poly">
                    <area target="" alt="r" title="r" href="https://www.r-project.org/about.html"
                        coords="233,141,217,143,213,157,210,148,219,160,225,162,230,166,235,142,244,154,240,161,241,167,236,160,234,153"
                        shape="poly">
                    <area target="" alt="dartabase" title="dartabase" href="https://www.mysql.com/"
                        coords="274,142,273,170,301,170,299,140" shape="poly">
                </map>
            </div>
    </div>
    
    <br/>
    <center>
        <h1>Top Front-end Javascript Frameworks</h1>
    </center>
    <table class="center">
        <caption style="color:grey;">Top Front-end Javascript Frameworks</caption>
        <tr>
            <th>Angular Js</th>
            <th>React Js</th>
            <th>Vue Js</th>

        </tr>
        <tr>
            <td data-th="Angular Js">One of the most powerful framework</td>
            <td data-th="React Js">Earned popularity within short time</td>
            <td data-th="Vue Js">Fastest growing framework by developers</td>

        </tr>
        <tr>
            <td data-th="Angular Js">Well organised structure and has HTML,CSS and typescript files individually for
                each element and features.</td>
            <td data-th="React Js">This will control your each row to every button in a table</td>
            <td data-th="Vue Js">This is for simple arranged data binding and fixed files.</td>

        </tr>
    </table>
    
    <div class="rbd-core-ui">
        <div class="rbd-review-slider">
            <center>
                <h1>Reviews</h1>
            </center>
            <div class="rbd-review-container">
               
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
        $sql= "SELECT * FROM feedbackstu";
        $result= $connection->query($sql);

       

        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
               
                echo ' <div class="rbd-review review1.1 rbd-curr"> 
                <h3 class="rbd-heading">'.$row['name'].' </h3>
                <i class="renderSVG" data-icon="star" data-repeat="5"></i>
                <div class="rbd-content">'.$row['suggestion'].'</div> 
                </div>';
            }
        }
        
        ?> 
            </div>
        </div>
    </div>

    
    <div id="form-container">
        <b>
            <center>
                <h2 style="font-size:40px;color:#811264">Suggestions</h2>
            </center>
        </b>
        
         <form action="feedback.php" method="post" name="myform">
            <label for="name">Name</label>
            <input type="text" id="names" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>

            <label for="suggestion">Suggestion</label>
            <textarea id="suggestion" name="suggestion" rows="5" required></textarea>

            <input type="Submit" id="bt" value="Submit">
        </form>
<BR>
        <footer>
            <span id="creators"></span>
        </footer>
    </div>

    <script>
        let options = {
                'speed': 4000,
                'pause': true,
            }
         window.addEventListener('DOMContentLoaded', function () {
                let slider = document.querySelector('.rbd-review-slider');
                let slides = slider.querySelectorAll('.rbd-review');
                let total = slides.length;
                let pause = false;

                function pauseSlide() {
                    slider.onmouseleave = function () { pause = false; };
                    slider.onmouseenter = function () { pause = true; };
                    return pause;
                }

                function slide() {
                    if (options.pause && pauseSlide()) return;

                    let activeSlide = document.querySelector('.rbd-review-slider .rbd-review.rbd-curr');
                    let prev, curr, next, soon;

                    curr = activeSlide;
                    prev = activeSlide.previousElementSibling;
                    next = activeSlide.nextElementSibling;

                    if (next != null) {
                        soon = next.nextElementSibling == null ? slides[0] : next.nextElementSibling;
                    } else {
                        next = slides[0];
                        soon = slides[1];
                    }

                    if (prev != null) prev.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next');
                    if (curr != null) curr.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); curr.classList.add('rbd-prev');
                    if (next != null) next.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); next.classList.add('rbd-curr');
                    if (soon != null) soon.classList.remove('rbd-prev', 'rbd-curr', 'rbd-next'); soon.classList.add('rbd-next');
                }

                let slideTimer = setInterval(function () {
                    slide();
                }, options.speed);
            }, true);

    </script>
</body