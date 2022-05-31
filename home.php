<?php
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Red Wings</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
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

    <div class="home-items-all">
      <!--- HomePage Page Starts --->

    <div class="container-fluid home-cont">
      <div class="row">
        <div class="container-fluid home-content col-lg-6">
          <h1 class="home-page-bold-text">Donate Blood and Save Lives</h1>
          <p class="home-page-desc">
            Are you willing to donate your blood to save millions of lives?<br>
            Are you in need of blood?<br>
            Dont Worry!!<br>
            Let us know Your Query, we will help you to save lives.
          </p>
          <a href="about.html">
            <button
              class="btn btn-outline-danger mx-2 know-more-btn"
              type="submit"
            >
              Know More
            </button>
          </a>
        </div>
        <!-- <div class="col-lg-6 mt-5 home-img">
          <img src="assets/images/signUp-bg.jpg" alt="" />
        </div> -->
      </div>
    </div>

    <!--- HomePage Page End --->

    <!--- Experience Page Start --->

    <div class="experience container-fluid">
      <h1 class="ex-header text-white" style="text-align: center">Experience</h1>
      <div class="container-fluid row ex-cont">
        <div class="card my-5 col-4" style="width: 18rem">
          <img src="./image/ex-1.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Time</h5>
            <p class="card-text">
              We are there to serve you a better healthy life for 20+ years
            </p>
          </div>
        </div>
        <div class="card my-5 col-4" style="width: 18rem">
          <img src="./image/ex-2.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Donors</h5>
            <p class="card-text">
              Now with your love and devotion we have 500 donors with us.
            </p>
          </div>
        </div>
        <div class="card my-5 col-4" style="width: 18rem">
          <img src="./image/ex-3.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Receivers</h5>
            <p class="card-text">
              Till this this date we supplied blood to 1000+ receivers.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--- Experience Page End --->

    <!--- Services Page Start --->

    <div class="services container-fluid">
      <h1 class="ex-header text-white" style="text-align: center">Services</h1>
      <div class="service-container padd-15">
        <div class="card text-center">
          <div class="card-header">Our Services</div>
          <div class="card-body">
            <h5 class="card-title">The Services we provide</h5>
            <p class="card-text">
              With the help of us you can donate blood and also you can receive
              blood from the available ones.
            </p>
            <a href="index.php" class="btn btn-primary mx-2"
              >I want to Donate</a
            >
            <a href="index.php" class="btn btn-primary mx-2"
              >I want to Receive</a
            >
          </div>
        </div>
      </div>
    </div>

    <!--- Services Page End --->

    <!--- Faq Page Start --->

    <div class="faq container-fluid">
      <h1 class="ex-header text-white" style="text-align: center;">FAQs</h1>
      <div
        class="accordion accordion-flush faq-items padd-15"
        id="accordionFlushExample"
      >
        <div class="accordion-item mar-15">
          <h2 class="accordion-header" id="flush-headingOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne"
              aria-expanded="false"
              aria-controls="flush-collapseOne"
            >
              After which age you can donate blood?
            </button>
          </h2>
          <div
            id="flush-collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              After the age of 18 you can donate blood.
            </div>
          </div>
        </div>
        <div class="accordion-item mar-15">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo"
              aria-expanded="false"
              aria-controls="flush-collapseTwo"
            >
              How many times i can donate blood in a month?
            </button>
          </h2>
          <div
            id="flush-collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              It's totally up to your body. You can donate blood as many times
              as you want relying upon how quick your body can generate new
              blood.
            </div>
          </div>
        </div>
        <div class="accordion-item mar-15">
          <h2 class="accordion-header" id="flush-headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree"
              aria-expanded="false"
              aria-controls="flush-collapseThree"
            >
              Is it good to donate blood for our health?
            </button>
          </h2>
          <div
            id="flush-collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              Yes, obviously. If you donate blood, your body is capable enough
              to regenerate new blood in your veins. So Donate blood and save
              millions of lives.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--- Faq Page End --->
    </div>
    <?php
      include 'connect.php';
  ?>
  <br>
<div class="container" id="contact">
<h3 class="sec_heading">Contact <span>Us</span></h3>
</div>
<div class="container">
<div class="row">
    <div class="col-md-6">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_mwawjro9.json"  background="transparent"  speed="1"  loop autoplay></lottie-player>
    </div>
    <div class="col-md-6">
        <div id="msg">
    <form method="POST" action="contact_script.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject here">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" rows="8" cols="20" class="form-control" id="message" placeholder="Enter your messages, queries here..."></textarea>
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
                </button>
              </a>
              <a href="login.php">
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