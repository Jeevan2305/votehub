<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data = $_SESSION['data'];
if($_SESSION['data'] == 1){
    $status = '<b class="text-success">Voted</b>';
} else{
    $status = '<b class="text-danger">Not Voted</b>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | PHP Voting System</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="../logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <?php
                if(isset($_SESSION['groups'])){
                    $groups = $_SESSION['groups'];
                    for($i=0;$i<count($groups);$i++){
                        ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../images/<?php echo $groups[$i]['photo']; ?>" alt="group-image"/>
                        </div>
                        <div class="col-md-8">
                            <strong class="text-dark h5">Group name:</strong><?php echo $groups[$i]['username']; ?><br>
                            <strong class="text-dark h5">Vote:</strong><?php echo $groups[$i]['votes']; ?><br>
                        </div>
                    </div>
                        
                        <form action="../models/voting.php" method="POST">
                            <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']; ?>">
                            <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']; ?>">

                            <?php
                            if($_SESSION['status'] == 1){
                                ?>
                                <button type="submit" class="bg-success my-4 text-white px-3">Voted</button>
                                <?php
                            } else{
                                ?>
                                <button type="submit" class="bg-danger my-4 text-white px-3" type="submit">Vote</button>
                                <?php
                            }
                            ?>
                        </form>
                        <hr>
                        <?php
                    }
                } else{
                    ?>
                    <div class="container">
                        <h2 class="text-center">No groups found</h2>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-5">
                <img src="../images/<?php echo htmlspecialchars($data['photo']); ?>" alt="user-image"/>
                <br>
                <strong class="text-dark h5">Name:</strong> <?php echo $data['username'];?><br>
                <strong class="text-dark h5">Phone no:</strong> <?php echo $data['mobile'];?><br>
                <strong class="text-dark h5">Status:</strong><?php echo $status;?><br>
            </div>
        </div>
    </div>
</body>
</html>