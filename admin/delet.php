<?php
include('conn.php');
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM product WHERE id=$id");
header('location:product.php');
