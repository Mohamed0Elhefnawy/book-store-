

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmation products </title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<style>
    .main{
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
        margin-top: 50px;
    }
</style>
<body>
<?php
/////PROBLEM
include('conn.php');
$ID = $_GET['id'] ;
$up=mysqli_query($con, "SELECT * FROM product WHERE id =$ID" ) ;  
$dat = mysqli_fetch_array($up) ;
?>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post">
                <h2>Do you want to make a purchase</h2>
                <input type="text" name ='id' value="<?php echo $dat['id'] ?>" >
                <input type="text" name ='name' value="<?php echo $dat['name'] ?>" >
                <br>
                <input type="text" name ='price' value="<?php echo $dat['salary'] ?>" >
                <br>
                <button name = "add" type="submit" class="btn btn-warning" > confirmation </button>
                <br>
                <a href="avproduct.php">back to shop</a>

            </form>
        </div>
    </center>
    
</body>
</html>