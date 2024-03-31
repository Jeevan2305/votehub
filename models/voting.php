<?php
session_start();
include('connect.php');
$groupid = $_POST['groupid'];
$votes = $_POST['groupvotes'];
$totalvotes = $votes + 1;
$userid = $_SESSION['id'];
$updatevotes = mysqli_query($conn,"UPDATE `userdata` SET votes = '$totalvotes' WHERE id='$groupid'");
$updatestatus = mysqli_query($conn,"UPDATE `userdata` SET status = 1 WHERE id='$userid'");
if($updatevotes && $updatestatus){
    $getgroups = mysqli_query($conn, "SELECT username, photo, votes, id FROM `userdata` WHERE standard = 'group'");
    if(mysqli_num_rows($getgroups) > 0){
        $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;
    }
    echo '<script>
    alert("Voted successfully");
    window.location.href = "../pages/dashboard.php";
    </script>';
}
else{
    echo '<script>
    alert("Voting failed");
    window.location.href = "../pages/dashboard.php";
    </script>';
}
?>