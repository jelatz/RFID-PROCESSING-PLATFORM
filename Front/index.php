<?php
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="background-image:url(../Front/_assets/images/background.png); background-size:cover; background-repeat:no-repeat; height:100vh;">
    <div class="container">
        <div class="row row-cols-1 justify-content-center text-center align-items-center" style="height: 100vh;">
            <div class="col-5">
                <img src="../Front/_assets/images/logo.png" alt="logo" class="img-fluid mt-5">
            </div>
            <div class="col-8">
                <p class="fs-6 fw-bold text-white mt-5 mb-4">REGISTER AS</p>
                <a href="../Front/student/studentinfo.php" class="btn text-white fs-bold text-decoration-none w-100" style="background-color: rgba(47, 42, 84, 1) !important; border-radius:15px !important;">
                    STUDENT
                </a>
                <a href="../Front/employee/employeeinfo.php" class="btn text-white fs-bold text-decoration-none w-100 mt-2" style="background-color: rgba(47, 42, 84, 1) !important; border-radius:15px !important;">
                    EMPLOYEE
                </a>
            </div>
    </div>
</body>
</html>