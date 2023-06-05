<html>
<head>
<title>PHP FUN QUIZ</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<style>


    h3
    {
        color:black;
    }

    input[type="submit"] {
  background-color:#45a049 ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;


}

input[type="submit"]:hover {
  background-color: #000000;
}

    </style>
</head>
<body>
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
<div class="container">
    <div class="mcq" style="background-color:black; color: white">
<br />
<br />
<center><b><h1> FUN MULTIPLE CHOICE QUESTIONS</h1></b>
<p>Please fill the details and answers  all questions-</p></center>
<br />
</div>
<div class="form-group">
<form action="score2.php" method="post">

<?php
$sql = "SELECT * FROM quizone";
$result = mysqli_query($connection, $sql);
$num_row = mysqli_num_rows($result);
$rand_keys= array_rand(range(1, $num_row),8);
$questions1= array();

for($i=0;$i<8;$i++)
{
    mysqli_data_seek($result, $rand_keys[$i]);
    $row = mysqli_fetch_array($result);
    $questions1[] = $row;
}

shuffle($questions1);
// Display the questions and answer options
for($i=0;$i<8;$i++) {
    echo "<h3>".$questions1[$i]['question']."</h3>";
    echo "<input type='radio' name='q".$questions1[$i]['q_id']."' value='".$questions1[$i]['option_a']."'>".$questions1[$i]['option_a']."<br>";
    echo "<input type='radio' name='q".$questions1[$i]['q_id']."' value='".$questions1[$i]['option_b']."'>".$questions1[$i]['option_b']."<br>";
    echo "<input type='radio' name='q".$questions1[$i]['q_id']."' value='".$questions1[$i]['option_c']."'>".$questions1[$i]['option_c']."<br>";
    echo "<input type='radio' name='q".$questions1[$i]['q_id']."' value='".$questions1[$i]['option_d']."'>".$questions1[$i]['option_d']."<br>";
}

?>

<br />
<center><input type="submit"  name="submit" value="Submit to view your score"/></center>
</form>
</div>
</div>
</body>
</html>

