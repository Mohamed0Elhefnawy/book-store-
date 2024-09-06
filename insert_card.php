<?php
include('conn.php');
if (isset($_POST['add']))
{
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $insert = "INSERT INTO `order` (name, salary) VALUES ('$NAME', '$PRICE')" ;
    mysqli_query($con,$insert);
    header('location:card.php');
}