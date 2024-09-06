<!DOCTYPE html>
<html lang="en">
<head>  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shope online </title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <?php

    include('conn.php');
    $ID = $_GET['id'] ;
    $up=mysqli_query($con," select * from product where id =$ID " ) ;  
    $data = mysqli_fetch_array($up) ;
    ?>
    
    <center>

        <h2>Update Thr Product </h2>
        <div class="main">
            <form action="update2.php" method="post" enctype = "multipart/form-data">
                <br>
                <input type="text" name = 'id'  placeholder="ID" value='<?php echo "id = ".$data['id'] ?>'>
                <br>
                <input type="text" name = 'name'  placeholder="Name" value='<?php echo $data['name'] ?>'>
                <br>
                <input type="text" name = 'price' placeholder="Price" value='<?php echo $data['salary'] ?>'>
                <br>
                <input type="file" id='file' name='image' style='display:none;'>
                <label for="file">update the image</label>

                <button name = "update" type="submit"> update the product </button>
                <br><br>
                <a href = "product.php"  >show all products</a> 
            </form>
        </div>


    </center>
</body>
</html>
