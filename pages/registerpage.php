<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PHP Voting System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
        <div class="bg-info py-4">
            <h2 class="text-center">Register</h2>
            <div class="container text-center">
                <form action="../models/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <input type="text" name="username" id="username" class="form-control w-50 m-auto" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" name="phoneno" id="phoneno" class="form-control w-50 m-auto" placeholder="Enter your phone no" required max="10" min="10">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" id="password" class="form-control w-50 m-auto" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-4">
                        <input type="password" name="confirm-password" id="confirm-password" class="form-control w-50 m-auto" placeholder="Confirm password" required>
                    </div>
                    <div class="mb-4">
                        <input type="file" name="photo" id="photo" class="form-control w-50 m-auto" required>
                    </div>
                    <div class="mb-4">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="null">Select below option</option>
                            <option value="group">Group</option>
                            <option value="voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark my-4">Register</button>
                    <p>Already have an account? <a href="../" class="text-white">Login here</a></p>
                </form>
            </div>
        </div>
</body>
</html>