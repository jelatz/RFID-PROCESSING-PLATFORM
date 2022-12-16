<?php
include '../../Back/config.php';
include '../header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_assets/css/custom.css">
    <link rel="stylesheet" href="../_assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>userinfo</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center align-items-center p-3">
        <div class="col-9 p-0 m-0">
            <h2 class="fw-bolder" style="color:rgba(47, 42, 84, 1) !important;">EMPLOYEE PERSONAL INFORMATION</h2>
        </div>
        <div class="col-3 p-0 m-0 text-center">
            <img src="../_assets/images/logo.png" alt="logo" width="50">
        </div>
    </div>
    <form action="../../Back/dbhelper.php" method="POST" class="d-grid gap-3 position-relative">
        <input type="text" class = "form-control" name="firstname" placeholder="First Name" required>
        <input type="text" class = "form-control" name="lastname" placeholder="Last Name" required>
        <div class="row">
            <div class="col-6">
        <input type="text" class = "form-control" name="idNumber" placeholder="ID Number" required>
            </div>
            <div class="col-6">
        <input type="text" class = "form-control" name="department" placeholder="Department" required>
            </div>
        </div>
        <input type="text" class = "form-control" name="address" placeholder="Address" required>
        <input type="date" class = "form-control" name="birthdate" placeholder="Birthdate" required>
        <input type="text" class = "form-control" name="contPer" placeholder="Contact Person" required>
        <input type="text" class = "form-control" name="contNum" placeholder="Contact Number" required>
        <div class="row">
            <div class="col-6">
        <input type="text" class = "form-control" name="sss" placeholder="SSS No." required>
            </div>
            <div class="col-6">
        <input type="text" class = "form-control" name="pagibig" placeholder="Pag-ibig" required>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
        <input type="text" class = "form-control" name="tin" placeholder="TIN" required>
            </div>
            <div class="col-6">
        <input type="text" class = "form-control" name="philhealth" placeholder="PhilHealth" required>
            </div>
        </div>
        <input type="file" class = "form-control mt-1" name="upload" required>
        <small class="position-absolute" style="bottom:3.5rem;">upload selfie</small>
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <button type="submit" name="submitEmployee" class="text-white my-3 fw-bolder w-100" style="background-color: rgba(47, 42, 84, 1) !important; border-radius:15px !important;">Submit</button>
            </div>
        </div>
    </form>
    </div>
<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>