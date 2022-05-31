<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <title>login</title>
    <link rel="stylesheet" href="css/sign-up.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="text-black body_all">
        <div class="text_style p-50">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, ab illo et minima excepturi illum voluptatum aliquam, aperiam harum quos quae facilis corporis cumque earum, natus veritatis magni provident quaerat!
            Magnam soluta excepturi reprehenderit odio illum nostrum architecto quasi possimus numquam quae totam dignissimos, voluptas quibusdam aliquid. Necessitatibus quia commodi laudantium harum consequatur. Nam nisi cupiditate dicta, expedita sit sapiente?
        </div>
        <div class="container form_up">
        <h2 class="my-5" style="text-align: center;">Welcome back</h2>
        <div class="form_up">
            <p>Please enter your details</p>
        <form method="POST" action="signup_script.php" class="container">
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="password"
                    required>
            </div>
  <?php
        if(isset($_GET['m1'])){
        echo $_GET['m1'];
        }
  ?>
  <button type="submit" value="submit" class="btn btn-md text-white" style="background-color: rgb(196, 81, 81); align-items: center;"> login</button>
  <p>*have not registerded yet?<br><a href="signup.php" style="text-decoration: none;"> Create an account fisrt</a></p>
        </form>
        
    </div>
    </div>
    </div>
</body>

</html>