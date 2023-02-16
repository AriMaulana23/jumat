<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- /bootstrap css -->

    <!-- mycss -->
    <link rel="stylesheet" href="css/dash.css">
    <!-- /mycss -->

</head>
<body>

    <!-- navbar-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/masbro.jpg" class="rounded-circle me-3" width="50" alt="">MasBroBakery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item align-items-center">
              <a class="nav-link" href="#"><img src="img/carticon.png" class="w-75" alt=""></a>
            </li>
            <li class="nav-item align-items-center">
              <img src="img/user.png" class="mt-2" width="40" alt="">
            </li>
            <li class="nav-item dropdown mt-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MasBro
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /navbar-->

    <section class="container justify-content-center pt-5 d-flex flex-wrap flex-grow-1">
      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kue Ngawi Special</h5>
          <p class="card-text">Rp. 132.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>

      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kue Acumalaka</h5>
          <p class="card-text">Rp. 199.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>

      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kue Kotak Farhan</h5>
          <p class="card-text">Rp. 89.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>

      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mini Cake Bingchiling</h5>
          <p class="card-text">Rp. 59.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>

      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kue Orang Putih</h5>
          <p class="card-text">Rp. 59.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>

      <div class="card me-3 mb-3" style="width: 18rem;">
        <img src="img/img6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kue Nigga</h5>
          <p class="card-text">Rp. 59.000</p>
          <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>