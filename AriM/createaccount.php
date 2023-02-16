<?php

require 'koneksi.php';

if (isset($_POST['submit'])) {
    if (createAccount($_POST) > 0) {
        echo "<script>alert('successfully created a new account');</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- /bootstrap css -->

    <!-- my css -->
    <link rel="stylesheet" href="css/createaccount.css">
    <!-- /my css -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
    <div class="container">
        <div class="container-left" data-aos="fade-right" data-aos-duration="500">
            <h4>Create Account</h4>
            <form method="post">
            <!-- USERNAME -->
            <div class="container-username">
                <label class="LName" for="username">Username</label>
                <input type="text" name="username" required id="username" class="iUser" placeholder="" />
            </div>
            <!-- /USERNAME -->

            <!-- PASSWORD -->
            <div class="container-password">
                <label class="LPass" for="password">Password</label>
                <input type="password" name="password" required id="password" class="iPass" placeholder="" />
            </div>
            <!-- /PASSWORD -->

            <!-- CONFIRM PASSWORD -->
            <div class="container-con-password">
                <label class="LconPass" for="con-password">Confirm Password</label>
                <input type="password" name="con-password" required id="con-password" class="con-iPass" placeholder="" />
            </div>
            <!-- /CONFIRM PASSWORD -->

            <!-- BUTTON SIGN IN -->
            <center>
                <button type="submit" name="submit" class="btn submit btn-light text-bg-dark">Create Account</button>
            </center>
            <!-- /BUTTON SIGN IN -->

            <!-- CREATE ACCOUNT LINK -->
            <p class="register">Already have an account? <a href="index.php" style="text-decoration: none">Sign In</a></p>
            <!-- /CREATE ACCOUNT LINK -->
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>