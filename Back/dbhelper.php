<?php
include 'config.php';

// STUDENT
if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $idNumber = $_POST['idNumber'];
    $course = $_POST['course'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $contPer = $_POST['contPer'];
    $contNum = $_POST['contNum'];
  $upload1 = time() . '_' . $_FILES['studyload']['name'];
  $target1 = '../Front/_assets/images/uploads/' . $upload1;
  $upload2 = time() . '_' . $_FILES['selfie']['name'];
  $target2 = '../Front/_assets/images/uploads/' . $upload2;
  $refNum = rand();


     if(move_uploaded_file($_FILES['studyload']['tmp_name'], $target1) && move_uploaded_file($_FILES['selfie']['tmp_name'], $target2)){


  $insert = mysqli_query($conn,"INSERT INTO student (id_number,lastname,  firstname, birthdate, address, course, selfie, osl, contact_per, contact_num,ref_num) VALUES ('$idNumber','$lastname', '$firstname', '$birthdate', '$address', '$course', '$target2', '$target1', '$contPer', '$contNum', '$refNum')");



        if($insert){
            echo "<script>alert('pakyu!');</script>";
            header('Location:../Front/student/studentqr.php?id='.$idNumber.'');
            exit();
        }

    }
    }

// EMPLOYEE
if(isset($_POST['submitEmployee'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $idNumber = $_POST['idNumber'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $contPer = $_POST['contPer'];
    $contNum = $_POST['contNum'];
    $sss = $_POST['sss'];
    $pagibig = $_POST['pagibig'];
    $tin = $_POST['tin'];
    $philhealth = $_POST['philhealth'];
    $upload1 = time() . '_' . $_FILES['selfie']['name'];
    $target1 = '../Front/_assets/images/uploads/' . $upload1;
    $refNum = rand();

    if(move_uploaded_file($_FILES['selfie']['tmp_name'], $target1)){
    
    $insert = mysqli_query($conn, "INSERT INTO employee (id_number, lastname, firstname, birthdate, address, department, philhealth, pagibig, sss, tin, selfie, status, contact_per, contact_num) VALUES ('$idNumber', '$lastname', '$firstname', '$birthdate', '$address', '$department', '$philhealth', '$pagibig', '$sss', '$tin', '$target1', '$contPer', '$contNum','$refNum')");

    if($insert){
        header('Location:../Front/employee/employeeqr.php?id='.$idNumber.'');
        exit();
    }


    }
}


?>