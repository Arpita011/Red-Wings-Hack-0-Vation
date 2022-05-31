<?php
include 'connect.php';
error_reporting(0);

    $name=$_POST['name'];
    $name = mysqli_real_escape_string($con , $name);
    $age = $_POST['age'];
    $age = mysqli_real_escape_string($con , $age);
    $sex = $_POST['sex'];
    $sex = mysqli_real_escape_string($con , $sex);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);
    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($con , $phone);
    $blood_group = $_POST['blood_group'];
    $blood_group = mysqli_real_escape_string($con , $blood_group);
    $photo_id = $_FILES['photo_id'];
    //$photo_id = mysqli_real_escape_string($con , $photo_id);
    $donation_date = $_POST['donation_date'];
    $donation_date = mysqli_real_escape_string($con , $donation_date);
    $problems = $_POST['problems'];
    $problems = mysqli_real_escape_string($con , $problems);
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);
    //print_r($photo_id);
    // $insert_query="INSERT INTO single(name,age,sex,email,phone,blood_group,donation_date,
    //                     problems,address) VALUES('$name','$age','$sex','$email','$phone','$blood_group',
    //                     '$donation_date','$problems','$address')";
    //     $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    //     if($query){
    //         echo "Inserted";
    //     } else{
    //         echo "Failed";
    //     }
    $filename=$_FILES['name'];
    $filepath=$_FILES['tmp_name'];
    $fileerror=$_FILES['error'];
    if($fileerror==0){
        $destination='upload/'.$filename;
        move_uploaded_file($filepath,$destination);
        $insert_query="INSERT INTO single(name,age,sex,email,phone,blood_group,photo_id,donation_date,
                        problems,address) VALUES('$name','$age','$sex','$email','$phone','$blood_group',
                        '$destination','$donation_date','$problems','$address')";
        $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
        //$_SESSION['email']=$email;
        $_SESSION['donation_date']=$donation_date;
        
        header('location:volunteer.php');
    }

?>