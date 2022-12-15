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
    <title>userinfo</title>
</head>
<body>
    <div class="container">

    <h2 class="p-3 fw-bold" style="color:rgba(47, 42, 84, 1) !important;">STUDENT PERSONAL INFORMATION</h2>
    
    <form action="#" method="POST" class="d-grid gap-3">
        <input type="text" class = "form-control" name="firstname" placeholder="First Name" required>
        <input type="text" class = "form-control" name="lastname" placeholder="Last Name" required>
        <div class="row">
            <div class="col-6">
        <input type="text" class = "form-control" name="idNumber" placeholder="ID Number" required>
            </div>
            <div class="col-6">
        <input type="text" class = "form-control" name="course" placeholder="Course" required>
            </div>
        </div>
        <input type="text" class = "form-control" name="address" placeholder="Address" required>
        <input type="text" class = "form-control" name="birthdate" placeholder="Birthdate" required>
        <input type="text" class = "form-control" name="contPer" placeholder="Contact Person" required>
        <input type="text" class = "form-control" name="contNum" placeholder="Contact Number" required>
        <input type="file" class = "form-control" name="studload" required>
        <small class="position-absolute" style="bottom:8.4rem;">upload selfie</small>
        <input type="file" class = "form-control mt-1" name="selfie" required>
        <small class="position-absolute" style="bottom:4.8rem;">upload study load</small>
        <button type="submit" name="submit" class="text-white mt-3 fw-bolder" style="background-color: rgba(47, 42, 84, 1) !important; border-radius:15px !important;">Submit</button>
    </form>
    </div>
<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>