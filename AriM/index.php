<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
  if ($_POST['username'] === 'masbro' && $_POST['password'] === 'masbro123') {
    header('Location: dashboard.php');
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- mycss -->
    <link rel="stylesheet" href="css/indexhtml.css" />
    <!-- /mycss -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <div class="container">
      <!-- BOX KIRI -->
      <div class="container-left" data-aos="fade-up" data-aos-duration="1000">
        <h4>Sign In</h4>
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
            <?php if (isset($error)): ?>
              <p style="color: red; font-style: italic;">Password Salah Masbro!</p>
            <?php endif; ?>
            <img id="show-pass" class="show-pass" src="img/eye-unlock.png" />
          </div>
          <!-- /PASSWORD -->

          <!-- BUTTON SIGN IN -->
          <center>
            <button type="submit" name="submit" class="btn submit btn-light text-bg-dark">Sign In</button>
          </center>
          <!-- /BUTTON SIGN IN -->

          <!-- FORGOT PASSWORD -->
          <center>
            <a class="forgot" href="#">Forgot Password?</a>
          </center>
          <!-- /FORGOT PASSWORD -->

          <!-- CREATE ACCOUNT LINK -->
          <p class="register">Don't have account? <a href="createaccount.php" style="text-decoration: none">Create account</a></p>
          <!-- /CREATE ACCOUNT LINK -->
        </form>
      </div>
      <!-- /BOX KIRI -->

      <!-- BOX KANAN -->
      <div class="container-right" data-aos="fade-up" data-aos-duration="1000">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/img1.jpg" class="d-block" alt="slide1" />
            </div>
            <div class="carousel-item">
              <img src="img/img2.jpg" class="d-block" alt="slide2" />
            </div>
            <div class="carousel-item">
              <img src="img/img6.jpg" class="d-block" alt="slide3" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="title-content">
          <h3 class="text-center text-light">Welcome To</h3>
          <h2 class="text-center text-light">MasBro Bakery</h2>
          <p class="text-center text-light">Please Sign In to continue</p>
        </div>
      </div>
      <!-- /BOX KANAN -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      $("#show-pass").mousedown(function () {
        let x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      });

      $("#show-pass").mouseup(function () {
        let x = document.getElementById("password");
        if (x.type === "text") {
          x.type = "password";
        } else {
          x.type = "text";
        }
      });

      // $("#hide-pass").click(function () {
      //   let x = document.getElementById("password");
      //   let unlockEye = document.getElementById("show-pass");
      //   let lockEye = document.getElementById("hide-pass");
      //   if (x.type === "text") {
      //     x.type = "password";
      //   } else {
      //     x.type = "text";
      //   }
      // });

      // $("#show-pass").mouseup(function () {
      //   $("password").prop("type", "password");
      // });

      // $("#show-pass").mousedown(function () {
      //   $("#password").prop("type", "text");
      // });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
