<?php
include 'connect.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>donars</title>
    <style>
      body{
        background: linear-gradient(rgb(235, 249, 249), rgba(118, 169, 236, 0.667));
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
              <a class="nav-link" href="home.php"
                ><h7 class="nav-texts">Contact Us</h7></a
              >
            </li>
          </ul>
          <form class="d-flex" role="search">
          <!-- <a href="signup.php">
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
              </a> -->
          </form>
        </div>
      </div>
    </nav>

    <!--- Navbar End --->
    <h3 style="text-align: center;">Our Donars</h3>
    <br><br>
    <h5  style="text-align: center;">---Single Donars---</h5>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Donation date</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql="SELECT * FROM single";
        $query=mysqli_query($con,$sql);
        while($rows = mysqli_fetch_assoc($query))
        {
      ?>
    <tr>
      <td><?php echo $rows['sid']; ?></td>
      <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['age']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['donation_date']; ?></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
<br><br>
<h5  style="text-align: center;">---Hospitals/Organizations---</h5>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hospital/Organization Name</th>
      <th scope="col">Location</th>
      <th scope="col">Email</th>
      <th scope="col">Donation date</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql="SELECT * FROM organization";
        $query=mysqli_query($con,$sql);
        while($rows = mysqli_fetch_assoc($query))
        {
      ?>
    <tr>
      <td><?php echo $rows['oid']; ?></td>
      <td><?php echo $rows['name']; ?></td>
      <td><?php echo $rows['address']; ?></td>
      <td><?php echo $rows['email']; ?></td>
      <td><?php echo $rows['donation_date']; ?></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
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