<?php
include 'connect.php';
$name = $_POST['name'];
$name = mysqli_real_escape_string($con , $name);
$age = $_POST['age'];
$age = mysqli_real_escape_string($con , $age);
$sex = $_POST['sex'];
$sex = mysqli_real_escape_string($con , $sex);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con , $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con , $password);
$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($con , $phone);
$occupation = $_POST['occupation'];
$occupation = mysqli_real_escape_string($con , $occupation);
$address = $_POST['address'];
$address = mysqli_real_escape_string($con , $address);

 $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $phone_regex = "/^[789][0-9]{9}$/";
 $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
    }else if(!preg_match($email_regex , $email)){
        $error = "<span class='red'>Incorrect Email Id</span>";
        header('location:signup.php?m1='.$error);
    }
    else if(!preg_match($phone_regex , $phone )){
        $error = "<span class='red'>Incorrect phone Number</span>";
        header('location:signup.php?m2='.$error);
    }
    else{
        $str_pass=password_hash($password, PASSWORD_BCRYPT);
        $insert_query="INSERT INTO users (name,age,sex,email,password,phone,occupation,address) VALUES ('$name','$age','$sex','$email','$str_pass','$phone','$occupation','$address')";
        $insert_query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
        $id = mysqli_insert_id($con);
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        header('location:home.php');
    }
?>


<!-- login_script -->
<?php
include 'connect.php';

$mail=$_POST['email'];
$mail=mysqli_real_escape_string($con,$email);

$pass=$_POST['password'];
$pass=mysqli_real_escape_string($con,$password);

$login_select_query="SELECT id,email FROM users WHERE email='$mail'";
$login_select_query_result= mysqli_query($con,$login_select_query)or die(mysqli_error($con));

$total_rows_fetched = mysqli_num_rows($login_select_query_result);
$pass_check=password_verify($pass,$str_pass);
    if($total_rows_fetched!=0 || $pass_check){
        $row = mysqli_fetch_array($login_select_query_result);
        $_SESSION['email'] = $email;
        $_SESSION['id']=$row['id'];
        header("location:home.php");
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:login.php?m1=".$error);
    }
    
    ?>