<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>MY CART </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="index.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
<style>
   
   
    h3{
       
        font-family : 'Cairo',sans-serif; 
        font-weight:bold;
        
    }
    main
    {
       
        width: 40% ;
        margin-top: 20px;
    }
    table{
       
        box-shadow: 1px 1px 10px silver ;
    }
    thead{
        
        background-color:#3498DB;
        color:white;
        text-align:center ;
    }
    tbody{
       
        text-align:center ;

    }

</style>
</head>

<body>

    <center>
    <h3>My Card</h3>
    </center>
 <?php
 include('conn.php');
 $result = mysqli_query($con,'SELECT * FROM `order`'  );
while($row = mysqli_fetch_array($result))
{
  echo  "
  <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>product name</th>
                    <th scope='col'>product price</th>
                    <th scope='col'>DELETE product</th>
                </tr>
            </thead>    
            <tbody>
              <tr>
              <td>$row[name]</td>
              <td>$row[salary]</td>
              
              <td> <a href='delete_cart.php? id=$row[id]'  class='btn btn-danger'>remove product</a></td>
            </tr>
            <tbody>    
        </table>
    </main>
 </center>
  ";
}
?>

<center>
<a href="avproduct.php"> back to shoping</a>
</center>
</body>
</html>

