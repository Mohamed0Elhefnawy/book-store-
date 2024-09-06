<?php
include('conn.php');
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `order` WHERE id=$id");
header('location:card.php');