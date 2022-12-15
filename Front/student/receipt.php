<?php
include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Student Receipt</title>
</head>
<body>
<div class="container text-center p-5" style="height:100vh;">
<!-- SELFIE IMAGE AND REFERENCE NUMBER -->
    <div class="row">
        <div class="col-4 text-center justify-content-center align-items-center d-flex">
            <img src="../../assets/images/logo.png" alt="profile" class="img-fluid" width="80">
        </div>
        <div class="col-8 text-start">
            <h1 class="p-0 m-0 fw-bold" style="color:rgba(47, 42, 84, 1);">RECEIPT</h1>
            <small class="p-0 m-0 fw-6">REFERENCE ID</small>
            <small class="p-0 m-0 fw-bold d-block">123456789</small>
        </div>
    </div>
    <!-- STUDENT DETAILS -->
    <div class="row text-start mt-5">
        <div class="col">
            <small>Name</small>
            <p class="fw-bolder">STACY CANENCIA</p>
        </div>
    </div>
    <div class="row text-start">
        <div class="col-6">
            <small>ID Number</small>
            <p class="fw-bolder">200513236</p>
        </div>
        <div class="col-6">
            <small>Course</small>
            <p class="fw-bolder">BSIT</p>
        </div>
    </div>
    <div class="row text-start">
        <div class="col">
            <small>Address</small>
            <p class="fw-bolder">LAHUG, CEBU CITY</p>
        </div>
    </div>
    <!-- STATUS -->
    <div class="row justify-content-center mt-2">
        <div class="col text-center">
            <small>status</small>
            <h1 class="fw-bold" style="color: rgba(255, 168, 0, 1);">PROCESSING</h1>
        </div>
    </div>
    <!-- IN CASE OF EMERGENCY -->
    <div class="row justify-content-center mt-2">
        <div class="col p-3" style="background-color: rgba(245, 245, 245, 1);">
            <p>In Case of Emergency:</p>
            <small>Contact Person:</small>
            <h6 class="fw-bolder">Wyn Gamolo</h6>
            <small>Contact No.</small>
            <h6 class="fw-bolder">09123456789</h6>
        </div>
    </div>
</div>





<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>