<?php
include 'connect.php';

    $name=$_POST['name'];
    $name = mysqli_real_escape_string($con , $name);
    $age = $_POST['age'];
    $age = mysqli_real_escape_string($con , $age);
    $sex = $_POST['sex'];
    $sex = mysqli_real_escape_string($con , $sex);
    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($con , $phone);
    $blood_group = $_POST['blood_group'];
    $blood_group = mysqli_real_escape_string($con , $blood_group);
    $reason = $_POST['reason'];
    $reason = mysqli_real_escape_string($con , $reason);
    $doc_name = $_POST['doc_name'];
    $doc_name = mysqli_real_escape_string($con , $doc_name);
    $amount = $_POST['amount'];
    $amount = mysqli_real_escape_string($con , $amount);
    $del_date = $_POST['del_date'];
    $del_date = mysqli_real_escape_string($con , $del_date);
    $del_address = $_POST['del_address'];
    $del_address = mysqli_real_escape_string($con , $del_address);

    $phone_regex = "/^[789][0-9]{9}$/";
    if(!preg_match($phone_regex , $phone )){
        $error = "<span class='red'>Incorrect phone Number</span>";
        header('location:signup.php?m2='.$error);
    }
    else{
        $insert_query="INSERT INTO receiver(name,age,sex,phone,blood_group,reason,doc_name,amount,
                        del_date,del_address) VALUES('$name','$age','$sex','$phone','$blood_group',
                        '$reason','$doc_name','$amount','$del_date','$del_address')";
        $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
        header('location:order.php');
    }
?>