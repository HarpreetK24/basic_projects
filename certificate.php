<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <title>Document</title>
</head>
<body>
      <style>
        .outer-border{
    width:800px; height:650px; padding:20px; text-align:center; border: 10px solid #673AB7;    margin-left: 21%;
}

.inner-dotted-border{
    width:750px; height:600px; padding:20px; text-align:center; border: 5px solid #673AB7;border-style: dotted;
}

.certification{
    font-size:50px; font-weight:bold;    color: #663ab7;
}

.certify{
    font-size:25px;
}

.name{
    font-size:30px;    color: green;
}

.fs-30{
    font-size:30px;
}

.fs-20{
    font-size:20px;
}
      </style>
            
<div class="outer-border">
      <div class="inner-dotted-border">
             <span class="certification">Certificate of Completion</span>
             <br><br>
             <span class="certify"><i>This is to certify that</i></span>
             <br><br>
             <span class="name"><b><?php echo $_SESSION['username']['name'];?></b></span><br/><br/>
             <span class="certify"><i>has successfully completed the certification</i></span> <br/><br/>
             <span class="fs-30">Java Developer</span> <br/><br/>
             <span class="fs-20">with score of <b>A+</b></span> <br/><br/><br/><br/>
             <span class="certify"><i>dated</i></span><br>
            <span class="fs-30"><?php echo date("d-m-y");?></span>
      
      </div>
      </div>
      
</body>
</html>

