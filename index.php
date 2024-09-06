<!DOCTYPE html>
<html lang="en">
<head>  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shope online   </title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    
    <center>

        <h2>online shope add product </h2>
        <div class="main">
            <form action="insert.php" method="post" enctype = "multipart/form-data">
                <br>
                <input type="text" name = 'name'  placeholder="name">
                <br>
                <input type="text" name = 'price' placeholder="price" >
                <br>
                <input type="file" id='file' name='image' style='display:none;'>
                <label for="file">enter the image</label>

                <button name = "upload"> upload the product </button>
                <br><br>
                <a href = "product.php">show all products</a> 
            </form>
        </div>


    </center>
</body>
</html>