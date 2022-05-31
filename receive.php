<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>receive</title>
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <style>
      body{
    background: linear-gradient(rgb(235, 249, 249), rgba(118, 169, 236, 0.667));
    background-color: azure;
    height: fit-content;
}
.form-group{
  margin:10px 350px 10px 350px;
}
.form_up{
    align-items: center;
    justify-content: space-around;
}
h3{
    text-align: center;
}
h4{
    text-align: center;
}
@media only screen and (max-width: 1060px) {
  .form-group{
      margin:10px 100px 10px 100px;
  }
}
@media only screen and (max-width: 480px) {
  .temp{
    display: flex;
    flex-direction: column;
  }
  .form-group{
      margin:10px 30px 10px 30px;
  }

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
    <h3>Receiving rules</h3>
    <br><br>
    <h4>Please fill the form with the correct data of the person, needs blood</h4>
    <br>
    <div class="form_up">
    <form action="receive_script.php" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
        </div>
        <div class="temp">
        <div class="form-group">
        <input type="text" class="form-control" name="age" id="age" placeholder="age" required>
        </div>
        <div class="form-group">
        sex:
  <select name="sex">
    <option name="f" value="f">Female</option>
    <option name="m" value="m">Male</option>
    <option name="others" value="others">Others</option>
  </select>
  <br><br>
  Blood Group:
    <select name="blood_group">
    <option name="O+" value="O+">O+</option>
    <option name="O-" value="O-">O-</option>
    <option name="A+" value="A+">A+</option>
    <option name="A-" value="A-">A-</option>
    <option name="B+" value="B+">B+</option>
    <option name="B-" value="B-">B-</option>
    <option name="AB+" value="AB+">AB+</option>
    <option name="AB-" value="AB-">AB-</option>
    <option name="Others" value="Others">Others</option>
    </select></div></div>
    <div class="form-group">
    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
  </div>
  <?php
    if(isset($_GET['m2'])){
    echo $_GET['m2'] ;
    }
  ?>
  <div class="form-group">
    <input type="text" class="form-control" name="reason" id="reason" placeholder="Reason for need blood" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="doc_name" id="doc_name" placeholder="Doctor's name" required>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="amount" id="amount" placeholder="How much units of blood needed" required>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="del_date" id="del_date" placeholder="Delivery date" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="del_address" id="del_address" placeholder="Delivery address" required>
  </div>
  <div class="form-group">
  <button type="submit" value="submit" class="btn btn-primary"> Submit</button>
  </div>
    </form>
  
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