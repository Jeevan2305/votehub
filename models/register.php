<?php
include('connect.php');

$username = $_POST['username'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];
$cpassword = $_POST['confirm-password'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

if($password != $cpassword){
    echo '<script>
    alert("Passwords do not match")
    window.location.href = "../pages/registerpage.php"
    </script>';
}
else{
    $sql = "INSERT INTO `userdata` (username, mobile, password, photo, standard, status, votes) 
    VALUES ('$username', '$phoneno', '$password', '$image', '$std', 0, 0)";
    $result = mysqli_query($conn, $sql);
    if($result){
        move_uploaded_file($tmp_name, "../images/$image");
        echo '<script>
        alert("Registration successful")
        window.location.href = "../"
        </script>';
    }
    else{
        echo '<script>
        alert("Registration failed")
        window.location.href = "../pages/registerpage.php"
        </script>';
    }
}
?>