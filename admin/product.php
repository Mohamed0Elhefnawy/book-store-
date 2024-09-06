<!DOCTYPE html>
<html lang="en">
<head>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  All Products   </title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <style>

        h3{
            color: #fff;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;

        }
        .card{

            float: right ;
            height: 15px;
            width: 20px;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;


        }
        .card img{
            width: 100%;
            height: 150px;
            
        }
        .card-body {
            color: #fff;
        }

    </style>
</head>
<body>
  <center>
<h3>All The Products Is Avaliable</h3>
</center>
 <?php
include('conn.php');
$result = mysqli_query($con,"SELECT * FROM product");
while($row = mysqli_fetch_array($result))
{
  echo  "
<center>
  <main>
    <div class='card' style='width: 12rem;'>
       <img src='$row[image]' class='card-img-top' >
       <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[salary]</p>
            <a href='delet.php? id=$row[id]'  class='btn btn-danger'>Remove </a>
            <a href='update.php? id=$row[id]'  class='btn btn-primary'>Edit</a>

        </div>
    </div>
  </main>
</center>
  ";
}
?>


</body>
</html>