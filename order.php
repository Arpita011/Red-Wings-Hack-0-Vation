<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        body{
            background-image: url('image/background.jpg');
        }

    </style>
    <link rel="stylesheet" href="css/style.css" />
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
              <a class="nav-link" href="#contact"
                ><h7 class="nav-texts">Contact Us</h7></a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
            <a href="login.php">
              <button
                class="btn btn-outline-danger mx-2 nav-btns"
                type="submit"
              >
                Login
              </button>
            </a>
            <a href="signup.php">
              <button
                class="btn btn-outline-danger mx-2 nav-btns"
                type="submit"
              >
                Sign Up
              </button>
            </a>
          </form>
        </div>
      </div>
    </nav>

    <!--- Navbar End --->
    <h1 style="text-align: center; margin-top: 300px;">We are looking for blood<br>Will inform shortly</h1>
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
              <a href="#">
                <button
                  type="button"
                  class="btn btn-outline-light btn-rounded mx-2"
                >
                  Sign up!
                </button>
              </a>
              <a href="#">
                <button type="button" class="btn btn-outline-light btn-rounded">
                  Log in!
                </button>
              </a>
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
          © 2022 Copyright: Team Plus One
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