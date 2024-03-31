<?php 


$conn = mysqli_connect('localhost', 'root', 'demo&123', 'votingapp');

if (!$conn) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 
?>