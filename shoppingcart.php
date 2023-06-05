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
if($_SERVER['REQUEST_METHOD']=='POST')
{

  // if snoEdit is set then this will execute to update

  if(isset($_POST['sno']))
  {
    $snoEdit=$_POST['sno'];

    $sql="UPDATE `addcourse` SET `add1` = '0' WHERE `addcourse`.`course_id` = '$snoEdit';"; 
    $delete_query = "DELETE FROM addcart WHERE id = '$snoEdit'";
    $result=mysqli_query($connection,$sql);
    mysqli_query($connection, $delete_query);
  }


  if(isset($_POST['sno1']))
  {
    $snoEdit1=$_POST['sno1'];

    $sql="UPDATE `addcart` SET `buy_id` = '1' WHERE `addcart`.`id` = '$snoEdit1';"; 
    $sql2="UPDATE `addcourse` SET `add1` = '0' WHERE `addcourse`.`course_id` = '$snoEdit1';"; 
    mysqli_query($connection, $sql2);
    $result=mysqli_query($connection,$sql);
    
  }
}
?>

<!DOCTYPE html>

</html>
<title>COURSES</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <section class="h-100" style="background-color: #ffffff;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                <br />
                <section>
    <b>
        <center><h1 style="color:rgb(0, 0, 0); font-family: sans-serif; font-size: 25px;"> SHOPPING CART
        </h1></center>
    </b>
 <center> <a href="mycourses.php"  style=" text-decoration: none; color:blue;">Go to My Courses</a></center>
</section>
    
    <hr />
    <br />
   
                  

                    
        <?php
        $sql= "SELECT * FROM addcourse where add1= '1'";
        $result= $connection->query($sql);
        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
                $course_id= $row['course_id'];
                echo '  <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <img src="'.$row['image'].'"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <p class="lead fw-normal mb-2">' .$row['course_name']. '</p>
                           
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <h5 class="mb-0"><span>₹</span>' .$row['selling_price']. '</h5>

                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <b><button class="btn btn-link px-2"
                                    style=" text-decoration: none; color:red" id="'.$row['course_id'].' ">REMOVE FROM CART</button></b>

                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <b><button class="btn btn-link px-3"
                        style=" text-decoration: none; color:green;;" id="'.$row['course_id'].' ">BUY NOW</button></b>
                        </div>
                    </div>
                </div>
            </div>';
                $column1 = $row['course_id']; 
                $column2 = $row['course_name'];
                $column3 = $row['course_description'];
                $column4 = $row['selling_price'];
                $column5 = $row['desc2'];
                $column6 = $row['skill1'];
                $column7 = $row['skill2'];
                $column8 = $row['skill3'];
                $insert_query = "INSERT INTO addcart (id, names, descriptions, selling_price, desc2, skill1, skill2, skill3) VALUES ('$column1', '$column2', '$column3', '$column4','$column5','$column6','$column7','$column8')";
            mysqli_query($connection, $insert_query);
                
            }
        }
      
        ?> 

        

                  




                </div>
            </div>
        </div>
    </section>

    <form action="shoppingcart.php" method="post" id="wishlist">
       <input type="hidden" name="sno" id="sno">
      </form>    

      <form action="shoppingcart.php" method="post" id="buynow">
        <<input type="hidden" name="sno1" id="sno1">
      </form>   
    <script>
      edits=document.getElementsByClassName('btn btn-link px-2');
      Array.from(edits).forEach((element)=>{
          element.addEventListener("click",(e)=>{
        //   tr=e.target.parentNode.parentNode;
        //   name=tr.getElementsByTagName('td')[1].innerText;
        //   username=tr.getElementsByTagName('td')[2].innerText;
        //   console.log(name,username);
        //   nameEdit.value=name;  
        //   usernameEdit.value=username;
            sno.value=e.target.id;
            console.log(e.target.id);
            document.getElementById('wishlist').submit();
        })
      })
      edits=document.getElementsByClassName('btn btn-link px-3');
      Array.from(edits).forEach((element)=>{
          element.addEventListener("click",(e)=>{
        //   tr=e.target.parentNode.parentNode;
        //   name=tr.getElementsByTagName('td')[1].innerText;
        //   username=tr.getElementsByTagName('td')[2].innerText;
        //   console.log(name,username);
        //   nameEdit.value=name;  
        //   usernameEdit.value=username;
            sno1.value=e.target.id;
            console.log(e.target.id);
            document.getElementById('buynow').submit();
        })
      })


    </script>      
</body>