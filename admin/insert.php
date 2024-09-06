<?php
include("conn.php");

if (isset($_POST['upload']))
{
$NAME = $_POST['name'];
$PRICE = $_POST['price'];
$IMAGE = $_FILES['image'];
$image_location =$_FILES['image']['tmp_name'];
$image_name= $_FILES['image']['name'];
$image_up ="images/".$image_name;
$insert = "INSERT INTO product (name ,salary ,image) VALUES('$NAME' , '$PRICE' , '$image_up')" ;
mysqli_query($con,$insert);
if(move_uploaded_file($image_location,'images/'.$image_name))
{
    echo"<script>alert('the image is succeful upload')</script>";
}else{
    echo"<script>alert('the image not succeful upload')</script>";
}
header('location:index.php');
}
