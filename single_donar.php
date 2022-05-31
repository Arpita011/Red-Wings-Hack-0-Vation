<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>single donar</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
  
    <h2 style="text-align: center;">Single Donar</h2>
    <br><br>
    <div class="form_up">
    <form method="POST" action="single_donar_script.php" enctype="multipart/form-data">
        <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="age" id="age" placeholder="age" required>
        </div>
        sex:
  <select name="sex">
    <option name="f" value="f">Female</option>
    <option name="m" value="m">Male</option>
    <option name="others" value="others">Others</option>
  </select>
  <div class="form-group">
    <input type="text" class="form-control" name="email" id="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required>
  </div>
  <?php
    if(isset($_GET['m1'])){
    echo $_GET['m1'];
    }
  ?>
    <div class="form-group">
    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
  </div>
  <?php
    if(isset($_GET['m2'])){
    echo $_GET['m2'] ;
    }
  ?>
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
    </select> <br><br>
    Upload any photo-id(Aadhaaar card, Voter card, Driving lincense, Passport)
    <div class="form-group">
    <input type="file" class="form-control" name="photo_id" id="photo_id" placeholder="photo_id" required>
  </div>
  <div class="form-group">
    <input type="date" class="form-control" name="donation_date" id="donation_date" placeholder="Donation date" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="problems" id="problems" placeholder="Any physical problems" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="address" id="address" placeholder="address" required>
  </div>
  <button type="submit" value="submit" class="btn btn-primary"> Submit</button>
    </form>
    </div>
    <br>
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
