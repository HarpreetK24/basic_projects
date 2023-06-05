<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <style>
       

        .outer-border {
            width: 800px;
            height: 650px;
            padding: 20px;
            text-align: center;
            border: 10px solid #673AB7;
            margin-left: 21%;
            background-color:white;
        }

        .inner-dotted-border {
            width: 750px;
            height: 600px;
            padding: 20px;
            text-align: center;
            border: 5px solid #673AB7;
            border-style: dotted;
        }

        .certification {
            font-size: 50px;
            font-weight: bold;
            color: #663ab7;
        }

        .certify {
            font-size: 25px;
        }

        .name {
            font-size: 30px;
            color: green;
        }

        .fs-30 {
            font-size: 30px;
        }

        .fs-20 {
            font-size: 20px;
        }
    </style>

</head>
<?php
include("auth_session.php");
$host = "localhost";
$username = "root";
$password = "";
$dbname="e-learning";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}

$score = 0;
foreach ($_POST as $key => $value)
 {
    $q_id = substr($key, 1);
    $answer = mysqli_real_escape_string($connection, $value);
    $sql = "SELECT * FROM quizone WHERE q_id='$q_id' AND answer='$answer'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) == 1) {
        $score++;
    }

}
$name =  $_SESSION['username']['name'];
// Display the score
echo "<br /><br /><center><h1>Dear $name, <br/>Your score is $score </h1></center>";

$score = $score	/ 10 *100;
if($score < 50)
{
    echo '<style> body {
        background: #FF512F;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #DD2476, #FF512F);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #DD2476, #FF512F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        

    }</style>';
	echo '<center><h2>You need to score at least 50% to pass the exam.<span>&#128533</span></h2></center>';
}
else {
    echo '<style> body {
        background: #7F7FD5;  
background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);  
background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5); 

    }</style>';
	echo '<center><h2>You have passed the exam and scored '.round($score,2).'%. <span>🥳</span></h2></center>';
    echo '<div class="outer-border">
    <div class="inner-dotted-border">
           <span class="certification">Certificate of Completion</span>
           <br><br>
           <span class="certify"><i>This is to certify that</i></span>
           <br><br>
           <span class="name"><b>'.$name.'</b></span><br/><br/>
           <span class="certify"><i>has successfully completed the certification</i></span> <br/><br/>
           <span class="fs-30">Java Developer</span> <br/><br/>
           <span class="fs-20">with score of <b>'.round($score,2).'%</b></span> <br/><br/><br/><br/>
           <span class="certify"><i>Dated</i></span><br>
          <span class="fs-30">'.date("d-m-y").'</span>
    
    </div>
    </div>';
    
}


?>

</html>