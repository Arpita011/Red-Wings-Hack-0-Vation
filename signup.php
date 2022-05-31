<?php
include 'connect.php';
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
  <title>signup</title>
  <link rel="stylesheet" href="css/sign-up.css">
</head>

<body>
  <div class="text-white body_all">
    <div class="text_style p-10">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, ab illo et minima excepturi illum voluptatum aliquam, aperiam harum quos quae facilis corporis cumque earum, natus veritatis magni provident quaerat!
      Magnam soluta excepturi reprehenderit odio illum nostrum architecto quasi possimus numquam quae totam dignissimos, voluptas quibusdam aliquid. Necessitatibus quia commodi laudantium harum consequatur. Nam nisi cupiditate dicta, expedita sit sapiente?
      <br><br>
      <h5><b>*already have an account?<a href="login.php" style="text-decoration: none;"> Login here</b></a></h5>
    </div>
    <div class="container form_up">
      
      <h2 class="my-3" style="text-align: center;">sign up</h2>
      <form method="POST" action="signup_script.php" class="container">
        <div class="form-group">
          <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
        </div>
        <div class="form-group">
          <input type="number" class="form-control" name="age" id="age" placeholder="age" required>
        </div>
        sex:
        <select name="sex" class="mx-1 my-4">
          <option name="f" value="f">Female</option>
          <option name="m" value="m">Male</option>
          <option name="others" value="others">Others</option>
        </select>
        <br>
        <div class="form-group">
          <input type="text" class="form-control" name="email" id="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
        </div>
        <?php
        if (isset($_GET['m1'])) {
          echo $_GET['m1'];
        }
        ?>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
        </div>
        <?php
        if (isset($_GET['m2'])) {
          echo $_GET['m2'];
        }
        ?>
        <div class="form-group">
          <input type="text" class="form-control" name="occupation" id="occupation" placeholder="occupation">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="address" id="address" placeholder="address">
        </div>
        <button type="submit" value="submit" class="btn text-white" style="background-color: rgb(196, 81, 81); align-items: center;"> Submit</button>
        
      </form>
    </div>
  </div>
</body>

</html>