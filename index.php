<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <!--- Navbar Starts --->

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><h5 class="site-name mt-1">Red Wings</h5></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php"
                ><h7 class="nav-texts">Home</h7></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"
                ><h7 class="nav-texts">About</h7></a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#services"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <h7 class="nav-texts">Services</h7>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item nav-texts" href="index.php"
                    >Donate Blood</a
                  >
                </li>
                <li>
                  <a class="dropdown-item nav-texts" href="index.php"
                    >Ask for Blood</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php"
                ><h7 class="nav-texts">Contact Us</h7></a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
          <a href="signup.php">
                <button
                  type="button"
                  class="btn btn-outline-danger btn-rounded mx-2 nav-btns"
                >
                  Sign up
                </button>
              </a>
              <a href="login.php">
                <button type="button" class="btn btn-outline-danger btn-rounded nav-btns">
                  Log in
                </button>
              </a>
          </form>
        </div>
      </div>
    </nav>

    <!--- Navbar End --->
    <div class="services">
      <div class="container" style="text-align: center;">
        <h1 style="text-align: center">Services</h1>
        <div class="col-sm-6 my-4 mx-auto serv-items">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Donate Blood</h5>
              <p class="card-text">
                Donate Blood Save Millions Of Lives
              </p>
              <?php
        if(isset($_SESSION['email'])){
        ?>
          <a href="donation.php" class="btn btn-primary">Donate blood</a>
        <?php
        }
        
        else{
        ?>
          <a href="login.php" class="btn btn-primary">Donate blood</a>
        <?php
        }
        ?>
        <a href="donars.php" class="btn btn-primary">Our donars</a>
              
            </div>

          </div>
        </div>
        <div class="col-sm-6 my-4 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Need Blood</h5>
              <p class="card-text">
                Are you looking for blood. Let us know what are you actually looking for!
              </p>
              <?php
        if(isset($_SESSION['email'])){
        ?>
          <a href="receive.php" class="btn btn-primary">Need blood?</a>
        <?php
        }
        
        else{
        ?>
          <a href="login.php" class="btn btn-primary">Need Blood?</a>
        <?php
        }
        ?>
        <a href="availability.php" class="btn btn-primary">ckeck availibility</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--- Footer Page Start --->

    <section class="">
      <!-- Footer -->
      <footer class="text-center text-white" style="background-color: #0a4275">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">Register for free</span>
              <a href="signup.php">
              <button
                type="button"
                class="btn btn-outline-light btn-rounded mx-2"
              >
                Sign up!
              </button></a>
              <a href="login.php">
              <button type="button" class="btn btn-outline-light btn-rounded">
                Log in!
              </button></a>
            </p>
          </section>
          <!-- Section: CTA -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          Â© 2022 Copyright: Team Plus One
        </div>
        <!-- Copyright -->
      </footer>
    </section>

    <!--- Footer Page End --->

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper End -->
  </body>
</html>
